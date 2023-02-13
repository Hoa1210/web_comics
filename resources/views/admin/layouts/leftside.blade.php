 <!-- ========== Left Sidebar Start ========== -->
 <div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light mt-2">
        <span class="logo-lg">
            {{-- <img src="assets/images/logo.png" alt="" height="16"> --}}
            <h3>ADMIN</h3>
        </span>
        <span class="logo-sm">
            {{-- <img src="assets/images/logo_sm.png" alt="" height="16"> --}}
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

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="{{route('admin.home')}}" aria-expanded="false" aria-controls="home" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">4</span>
                    <span> Trang chủ </span>
                </a>
            </li>
            <li class="side-nav-item ">
                <a data-bs-toggle="collapse" href="#categories" aria-expanded="false" aria-controls="categories" class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span class="badge bg-danger text-white float-end">New</span>
                    <span> Thể loại </span>
                </a>
                <div class="collapse" id="categories">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('admin.categories')}}" >Danh sách thể loại</a>
                        </li>
                        <li>
                            <a href="{{route('admin.categories.create')}}">Thêm thể loại</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->