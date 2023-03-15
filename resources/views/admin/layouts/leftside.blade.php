
 <div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('admin.home')}}" class="logo text-center logo-light ">
        <span class="logo-lg">
            <img src="{{asset('images/logo/logo-1.png')}}" alt="" height="70">
        </span>
        <span class="logo-sm">
            <img src="{{asset('images/logo/logo.png')}}" alt="" height="40">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            {{-- <img src="assets/images/logo-dark.png" alt="" height="16"> --}}
        </span>
        <span class="logo-sm">
            {{-- <img src="assets/images/logo_sm_dark.png" alt="" height="16"> --}}
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <ul class="side-nav">

            <li class="side-nav-item">
                <a  href="{{route('admin.home')}}" aria-expanded="false" aria-controls="home" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">4</span>
                    <span> Trang chủ </span>
                </a>
            </li>
            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#genres" aria-expanded="false" aria-controls="genres" class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span class="badge bg-danger text-white float-end">New</span>
                    <span> Thể loại </span>
                </a>
                <div class="collapse" id="genres">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.genres')}}" >Danh sách thể loại</a>
                        </li>
                        <li>
                            <a href="{{route('admin.genres.create')}}">Thêm thể loại</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#comics" aria-expanded="false" aria-controls="comics" class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span class="badge bg-danger text-white float-end">4</span>
                    <span> Truyện </span>
                </a>
                <div class="collapse" id="comics">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.comics')}}" >Danh sách truyện</a>
                        </li>
                        <li>
                            <a href="{{route('admin.comics.create')}}">Thêm truyện</a>
                        </li>
                        <li>
                            <a href="{{route('admin.chapter.create')}}">Thêm chapter</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
