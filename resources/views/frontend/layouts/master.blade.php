<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend-assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/style.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/fontawesome/css/all.min.css')}}">
    <title>OnBoarding System</title>
    @yield('styling')
  </head>	
  <body>
    @include('frontend.includes.header')
    	@yield('content')
    @include('frontend.includes.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="{{asset('frontend-assets/bootstrap/js/popper.min.js')}}" integrity="" crossorigin="anonymous"></script>
    <script src="{{asset('frontend-assets/bootstrap/js/bootstrap.min.js')}}" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js"></script>
    <!-- Custom Script -->
    <script src="{{ asset('/frontend-assets/js/script.js') }}"></script>
    @yield('script')
  </body>
</html