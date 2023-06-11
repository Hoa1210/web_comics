<section id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
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
                        <a href="{{route('users.login.view')}}">Đăng nhập</a>
                        /
                        <a href="{{route('users.register.view')}}">Đăng ký</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search" style="display: flex;flex-direction: column">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="{{asset('images/client/logo/icon-close.png')}}" alt="CLOSE">
            </button>

            <form action="{{route('search')}}" id="liveSearch" method="GET"  class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <input class="plh3" type="text" name="search" id="search" placeholder="Nhập tên truyện...">
            </form>
        </div>
        <div id="list-comics">
            
        </div>
    </div>
</section>

