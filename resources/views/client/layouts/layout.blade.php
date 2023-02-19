<!DOCTYPE html>
<html lang="vn">
<head>
  @include('client.layouts.header')
</head>

<body class="body-inner">
  <div class="pageLoad">
    <div class="inner">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  @include('client.layouts.topbar')

  @include('client.layouts.navbar')
  
  @yield('content')

  
  <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                footer start
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->

    @include('client.layouts.footer')

  <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                footer end
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
  <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                modal end
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
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
                <input type="email" data-validation="email" data-content="Email has a invalid format"
                  class="form-control" name="email" id="email">
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
                  <li><a title="Reddit" href="#"><i class="fa-brands fa-reddit-alien"></i></a></li>
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
  <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
                modal end
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="{{asset('vendor/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{asset('vendor/bootstrap/bootstrap.min.js')}}" defer></script>
  <!-- Slick Carousel -->
  <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
  <script src="{{asset('vendor/slick/slick-animation.min.js')}}"></script>
  <!-- FontAwesome -->
  <script src="{{asset('vendor/fontawesome/FontAwesome.js')}}"></script>
  <!-- parallax -->
  <script src="{{asset('vendor/parallax/parallax.min.js')}}"></script>
  <!-- MagnificPopup -->
  <script src="{{asset('vendor/MagnificPopup/jquery.magnific-popup.min.js')}}"></script>
  <!-- demoValidation -->
  <script src="{{asset('vendor/demoValidation/xvalidation.js')}}"></script>
  <script>
    $(document).ready(function () {
      $("#form").xvalidation({
        theme: "materialize"
      });
      $("#form").submit(function (evt) {
        evt.preventDefault();
        evt.stopPropagation();
        if ($("#form").data().xvalidation.methods.validate()) {
          swal("Thanks!", "Sign UP Done", "success");
        }
        return false;
      });
    });
  </script>
  <!-- acmeticker -->
  <script src="vendor/acmeticker/acmeticker.min.js"></script>
  <!-- acmeticker active code -->
  <script>
    jQuery(document).ready(function ($) {
      $('.my-news-ticker').AcmeTicker({
        type: 'marquee',
        /*horizontal/horizontal/Marquee/type*/
        direction: 'left',
        /*up/down/left/right*/
        speed: 0.09,
        /*true/false/number*/
        /*For vertical/horizontal 600*/
        /*For marquee 0.05*/
        /*For typewriter 50*/
        controls: {
          toggle: $('.acme-news-ticker-pause'),
          /*Can be used for horizontal/horizontal/typewriter*/
          /*not work for marquee*/
        }
      });
    })
  </script>
  <script src="{{asset('js/client/script.js')}}"></script>

</body>

</html>