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
  @include('client.layouts.modal-login')
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
  <script src="{{asset('vendor/acmeticker/acmeticker.min.js')}}"></script>
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