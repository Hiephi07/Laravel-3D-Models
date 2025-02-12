<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login() {
        return view('frontend.auth.login');
    }

    public function handleLogin(Request $req) {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Password là bắt buộc'
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            if(Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
                return redirect()->route('home');
            } else {
                return redirect()->back()->withInput()->with([
                    'msg' => 'Tài khoản hoặc mật khẩu không đúng',
                    'alert-type' => 'danger'
                ]);
            }
        }
    }

    public function register() {
        return view('frontend.auth.register');
    }

    public function handleRegister(Request $req) {
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ], [
            'name.required' => 'Name là bắt buộc',
            'email.required' => 'Email là bắt buộc',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Password là bắt buộc'
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password)
            ]);
            return redirect()->route('login')->with([
                'msg' => 'Đăng ký thành công',
                'alert-type' => 'success'
            ]);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
