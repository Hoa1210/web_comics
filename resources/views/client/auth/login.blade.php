@extends('client.layouts.layout')
@section('content')
<div class="container">
    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
        <div class="row">
            <div class="col-lg-6 m-auto">

                <form action="{{route('users.login')}}" method="post">
                    @csrf
                    <div class="tit_form">
                        <h3>Hãy trở thành wibu ngay bây giờ nào </h3>
                    </div>
                    @if (session('error'))
                    <p class="error">
                        {{ session('error') }}
                    </p>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Email </label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        <div class="form_text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn. Chắc chắn :)).</div>
                        @error('email')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}">
                        @error('password')
                        <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember_account" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                    </div>
                    <button type="submit" class="modal_btn text-center">Đăng nhập</button>

                    <div class="form_icons">
                        <div class="icon_tit">Đăng nhập với</div>
                        <ul class="post-social-icons list-unstyled text-center">
                            <li class="social-icons-head">Share:</li>
                            <li><a title="Google" href="{{route('auth.redirect','google')}}"><i class="fa-brands fa-google" style="background: #ea4335;"></i></a></li>
                            {{-- <li><a title="Discord" href="#"><i class="fa-brands fa-discord"></i></a></li>
                            <li><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li> --}}
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

