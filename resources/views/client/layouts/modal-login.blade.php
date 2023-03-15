<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="row">
                <div class="col-lg-6 m-auto">

                    <form id="form" novalidate action="#" method="post">
                        <div class="tit_form">
                            <h3>Join Anime Heaven Now</h3>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email
                                address</label>
                            <input type="email" data-validation="email" data-content="Email has a invalid format" class="form-control" name="email" id="email">
                            <div class="form_text">We'll never share
                                your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="modal_btn text-center">Submit</button>

                        <div class="form_icons">
                            <div class="icon_tit">Sign in with social account</div>
                            <ul class="post-social-icons list-unstyled text-center">
                                <li class="social-icons-head">Share:</li>
                                <li><a title="Google" href="{{route('auth.redirect','google')}}"><i class="fa-brands fa-google" style="background: #ea4335;"></i></a></li>
                                <li><a title="Discord" href="#"><i class="fa-brands fa-discord"></i></a></li>
                                <li><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
