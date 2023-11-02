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

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Slick Carousel --> 
  <script src="{{asset('vendor/slick/slick.min.js')}}"></script>
  <script src="{{asset('vendor/slick/slick-animation.min.js')}}"></script>
  <!-- acmeticker -->
  <script src="{{asset('vendor/acmeticker/acmeticker.min.js')}}"></script>
  <!-- acmeticker active code -->
  <script>
    $(document).ready(function ($) {
      $('.my-news-ticker').AcmeTicker({
        type: 'marquee',
        direction: 'left',
        speed: 0.09,
        controls: {
          toggle: $('.acme-news-ticker-pause'),
        }
      });
    })
  </script>
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>  --}}
  <script src="{{asset('js/client/script.js')}}"></script>

</body>

</html>