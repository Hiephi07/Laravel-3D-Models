@extends('frontend.layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container mt-4 mb-5 pt-5">
        <form action="{{ route('handleLogin') }}" method="POST">
            @csrf
            <h1>Login</h1>
            @if (session('msg'))
                <div class="alert alert-{{ session('alert-type') }} mt-3">
                    {{ session('msg') }}
                </div>
            @endif
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <input type="submit" class="btn btn-primary" value="Login">
                <span>Bạn chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký ngay</a></span>
            </div>
        </form>
    </div>
@endsection