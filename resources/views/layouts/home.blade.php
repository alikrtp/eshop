@php
namespace App\Http\Controllers;
$setting=HomeController::getsetting();

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShop - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('keyword')" name="keywords">
    <meta content= "@yield('description')" name="description">
    <meta content="Afiek Corp." name="author">

    <!-- Favicon -->
    <link href="{{asset('assets')}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Topbar Start -->
@include('home.partial._topbar')
<!-- topbar End -->

   <!-- Navbar Start -->

   @include('home.partial._navbar')

<!-- Navbar End -->

@yield('content')

<!-- Footer Start -->
@include('home.partial._footer')
<!-- Footer End -->


</body>
</html>
