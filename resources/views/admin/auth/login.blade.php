<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Admin comics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/logo/logo.png')}}">

    <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

</head>

<body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <div class="card-header text-center bg-primary">
                            <img src="{{asset('images/logo/logo-1.png')}}" alt="" width="200">
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                            </div>

                            <form action="{{route('admin.auth')}}" method="post">
                                @csrf
                                @error('email')
                                <p>{{ $message }}</p>
                                @enderror
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>
                                

                                <div class="mb-3">
                                    <label for="password" class="form-label">Mật khẩu</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Ghi nhớ trong 7 ngày</label>
                                    </div>
                                </div>

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> Đăng nhập </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-alt">
        2022 - <script>
            document.write(new Date().getFullYear())

        </script> © Comics-cc
    </footer>

    <script src="{{asset('js/vendor.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>

</body>

</html>

