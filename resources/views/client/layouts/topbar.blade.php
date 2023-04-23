<section id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            {{-- <div class="col-lg-4 col-md-4 top-social text-center text-md-left">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="#">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a title="Twitter" href="#">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a title="Discord" href="#">
                            <span class="social-icon"><i class="fa-brands fa-discord"></i></span>
                        </a>
                        <a title="Reddit" href="#">
                            <span class="social-icon"><i class="fa-brands fa-reddit-alien"></i></span>
                        </a>
                    </li>
                </ul>
            </div> --}}
            <!--/ Top social end -->
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-right">
                    <li class="js-show-modal-search">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i>
                            <p class="info-text">Tìm kiếm</p>
                        </a>
                    </li>
                    <li class="header-get-a-quote">
                        @if(auth()->check())
                        <a href="{{route('users.logout')}}">Đăng xuất</a>
                        @else
                        <a href="{{route('users.login')}}">Đăng nhập / Đăng ký</a>
                        @endif
                    </li>
                </ul>
            </div>
            <!--/ Top search end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{asset('images/client/logo/icon-close.png')}}" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</section>

