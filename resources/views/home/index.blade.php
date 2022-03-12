@extends('layouts.home')


@section('title',$setting->title)








@section('content')

<!-- Topbar Start -->
@include('home.partial._topbar')
<!-- topbar End -->
   <!-- Navbar Start -->

     @include('home.partial._navbar')

    <!-- Navbar End -->

<!-- featured Start -->
@include('home.partial._featured')
<!-- featured End -->

<!-- categories Start -->
@include('home.partial._categories')
<!-- categories End -->

<!-- offer Start -->
@include('home.partial._offer')
<!-- offer End -->


<!-- Products Start -->
@include('home.partial._products')
<!-- Products End -->


   <!-- Vendor Start -->

     @include('home.partial._vendor')

    <!-- Vendor End -->

<!-- Footer Start -->
@include('home.partial._footer')
<!-- Footer End -->



@endsection



