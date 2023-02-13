<!DOCTYPE html>
<html lang="vi">
@include('admin.layouts.header')
<body data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
    <!-- Begin page -->
    <div class="wrapper">
        @include('admin.layouts.leftside')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @include('admin.layouts.topbar')
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('contents')

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            @include('admin.layouts.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

    <script src="{{asset('js/admin/main.js')}}"></script>
    <script src="{{asset('js/admin/vendor.min.js')}}"></script>
    <script src="{{asset('js/admin/app.min.js')}}"></script>

    @stack('js')
</body>

</html>

