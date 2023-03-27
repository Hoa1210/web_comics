<header id="header" class="header-two">
    <div class="site-navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light p-0">

              <div class="logo">
                <a class="d-block" href="{{route('home')}}">
                  <img loading="lazy" src="{{asset('images/client/logo/logo.png')}}" alt="logo">
                </a>
              </div>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto align-items-center">
                  <li class="nav-item active">
                    <a href="{{route('home')}}" class="nav-link" >Trang chủ</a>
                  </li>

                  <li class="nav-item ">
                    <a href="genre.html" class="nav-link"> Theo Dõi</a>
                  </li>

                  <li class="nav-item ">
                    <a href="{{route('genre')}}" class="nav-link"> Thể loại</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Top truyện</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Bản tin</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Liên Hệ</a>
                  </li>

                  <li class="header-get-a-quote">
                    @if(auth()->check())
                    <a class="btn btn-primary" href="{{route('users.logout')}}">Đăng xuất</a>
                    @else
                    <a class="btn btn-primary" href="{{route('login')}}">Đăng nhập</a>
                    @endif
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
      </div>
      <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
  </header>