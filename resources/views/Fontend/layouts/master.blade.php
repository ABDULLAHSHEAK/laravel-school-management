<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
<!-- ------------- bootstrap css ------------  -->
<link rel="stylesheet" href="{{asset('fontend')}}/Vendor/css/bootstrap.css">

<!-- ------------- bootstrap css ------------  -->

<!-- ------------- Bootstrap icone ------------  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- ------------- Bootstrap icone ------------  -->

<!-- ------------- Responsive css ------------  -->
<link rel="stylesheet" href="{{asset('fontend')}}/Vendor/css/responsive.css">
<!-- ------------- Responsive css ------------  -->

<!-- ------------- Menu css ------------  -->
<link rel="stylesheet" href="{{asset('fontend')}}/Vendor/css/menu.css">
<!-- ------------- Menu css ------------  -->

<!-- ------------- Slider css ------------  -->
<link rel="stylesheet" href="{{asset('fontend')}}/Vendor/css/slider.css">

<!-- ------------- Jquery js ------------  -->
<script src="{{asset('fontend')}}/Vendor/js/jquery.js"></script>
<!-- ------------- Jquery js ------------  -->

<!-- ------------- jquery-migrate.min.js ------------  -->
<script src="{{asset('fontend')}}/Vendor/js/jquery-migrate.min.js"></script>
<!-- ------------- jquery-migrate.min.js ------------  -->

<!-- ------------- Bootstrap js ------------  -->
<script src="{{asset('fontend')}}/Vendor/js/bootstrap.js"></script>
<!-- ------------- Bootstrap js ------------  -->

<!-- ------------- css ------------------  -->
<link rel="stylesheet" href="{{asset('fontend')}}/style.css">
<!-- ------------- css ------------------  -->

<!-- ------------- custom css ------------------  -->
<link rel="stylesheet" href="{{asset('fontend')}}/Vendor/css/custom.css">
<!-- ------------- custom css ------------------  -->
</head>

<body style="background-image: url({{asset('fontend/img/')}}/bgs.jpg)">
{{-- --------- header section -------------------- --}}
@include('Fontend.components.header')
{{-- --------- header section -------------------- --}}

{{-- ============ main content ============================= --}}
@yield('content')
{{-- ============ main content ============================= --}}

 {{-- -------------- footer section ------------------------------ --}}
 @include('Fontend.components.footer')
 {{-- -------------- footer section ------------------------------ --}}

<script src="{{asset('fontend')}}/Vendor/js/jquery.min.js"></script>
<script src="{{asset('fontend')}}/Vendor/js/carousel.js"></script>
<script src="{{asset('fontend')}}/Vendor/js/main.js"></script>

</body>

</html>
