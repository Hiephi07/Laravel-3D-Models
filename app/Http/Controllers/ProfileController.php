<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    use ImageUploadTrait;

    public function dashboard() {
        return view('frontend.profile.dashboard.dashboard');
    }

    public function myModel() {
        return view('frontend.profile.my-models.my-model');
    }

    public function upload() {
        return view('frontend.profile.publishing.upload');
    }

    public function purchase() {
        return view('frontend.profile.purchases.purchase');
    }

    public function productReport() {
        return view('frontend.profile.reports.product-report');
    }

    public function saleReport() {
        return view('frontend.profile.reports.sale-report');
    }

    public function setting() {
        return view('frontend.profile.settings.setting');
    }

    public function updateProfile(Request $req) {
        $validator = Validator::make($req->all(), [
            'birthday' => 'nullable|date',
            'avatar' => 'nullable|image|max:2048', // Chỉ chấp nhận ảnh, tối đa 2MB
            'about' => 'nullable|string|max:1000',
            'name' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'address1' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'postcode' => 'nullable|regex:/^\d{5,6}$/', // Định dạng mã bưu chính (5-6 số)
            'telephone' => 'nullable|regex:/^(\+?\d{1,4})?\s?\d{6,15}$/', // Số điện thoại hợp lệ
        ], [
            'birthday.date' => 'Ngày sinh không hợp lệ.',
            'avatar.image' => 'Ảnh đại diện phải là định dạng ảnh hợp lệ.',
            'avatar.max' => 'Ảnh đại diện không được vượt quá 2MB.',
            'about.max' => 'Thông tin giới thiệu không được quá 1000 ký tự.',
            'name.required' => 'Tên là bắt buộc.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',
            'company.max' => 'Tên công ty không được vượt quá 255 ký tự.',
            'address1.max' => 'Địa chỉ 1 không được vượt quá 255 ký tự.',
            'address2.max' => 'Địa chỉ 2 không được vượt quá 255 ký tự.',
            'city.max' => 'Tên thành phố không được vượt quá 100 ký tự.',
            'country.max' => 'Tên quốc gia không được vượt quá 100 ký tự.',
            'postcode.regex' => 'Mã bưu chính không hợp lệ.',
            'telephone.regex' => 'Số điện thoại không hợp lệ.',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $user = User::find(auth()->user()->id);

        // Sử dụng Trait để xử lý ảnh
        $avatar = $this->uploadImage($req->file('avatar'), 'avatars', $user->metadata->avatar ?? null);

        // Cập nhật thông tin người dùng
        $user->update(['name' => $req->name]);
        
        // Cập nhật hoặc tạo mới metadata
        $user->metadata()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'birthday' => $req->birthday,   
                'about' => $req->about,   
                'company' => $req->company,   
                'address1' => $req->address1,   
                'address2' => $req->address2,   
                'city' => $req->city,   
                'country' => $req->country,   
                'province' => $req->province,   
                'postal_code' => $req->postcode,   
                'telephone' => $req->telephone,
                'avatar' => $avatar
            ]
        );
        
        return redirect()->back()->with([
            'msg' => 'Cập nhật thông tin thành công',
            'alert-type' => 'success'
        ]);
        
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).+$/'
            ],
        ], [
            'current_password.required' => 'Vui lòng nhập mật khẩu hiện tại.',
            'new_password.required' => 'Vui lòng nhập mật khẩu mới.',
            'new_password.min' => 'Mật khẩu mới phải có ít nhất 8 ký tự.',
            'new_password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'new_password.regex' => 'Mật khẩu mới phải chứa ít nhất 1 chữ hoa, 1 chữ thường và 1 ký tự đặc biệt.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with([
                'msg' => 'Thay đổi mật khẩu không thành công!',
                'alert-type' => 'danger'
            ]);
        }

        $user = User::find(auth()->user()->id);

        // Kiểm tra mật khẩu hiện tại
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with([
                'msg' => 'Mật khẩu hiện tại không chính xác!',
                'alert-type' => 'danger'
            ]);
        }

        // Cập nhật mật khẩu mới
        $user->update(['password' => Hash::make($request->new_password)]);

        return redirect()->back()->with([
            'msg' => 'Mật khẩu đã được thay đổi thành công!',
            'alert-type' => 'success'
        ]);
    }
}
