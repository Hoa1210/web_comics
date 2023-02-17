<!DOCTYPE html>
<html lang="vi">
@include('admin.layouts.header')
<body data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
    <div class="wrapper">
        @include('admin.layouts.leftside')
        <div class="content-page">
            <div class="content">
                @include('admin.layouts.topbar')
                <div class="container-fluid">
                    @yield('contents')
                </div>
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>

    <div class="rightbar-overlay"></div>

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="{{asset('js/admin/main.js')}}"></script>
    <script src="{{asset('js/vendor.min.js')}}"></script>
    <script src="{{asset('js/app.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/vendor/dataTables.bootstrap5.js')}}"></script>
    @stack('js')
</body>

</html>

