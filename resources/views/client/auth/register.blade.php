@extends('client.layouts.layout')
@section('content')
<div class="container">
    <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
        <div class="row">
            <div class="col-lg-6 m-auto">

                <form action="{{route('users.register')}}" method="post">
                    @csrf
                    <div class="tit_form">
                        <h3>Hãy trở thành wibu ngay bây giờ nào </h3>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" class="form-control" name="name" >
                        @error('name')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email </label>
                        <input type="email" class="form-control" name="email"  value="{{ old('email') }}">
                        @error('email')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" >Mật khẩu</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        @error('password')
                            <p class="error">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="modal_btn text-center">Đăng ký</button>

                    <div class="form_icons">
                        <div class="icon_tit">Đăng ký với</div>
                        <ul class="post-social-icons list-unstyled text-center">
                            <li class="social-icons-head">Mạng xã hội:</li>
                            <li><a title="Google" href="{{route('auth.redirect','google')}}"><i class="fa-brands fa-google" style="background: #ea4335;"></i></a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
