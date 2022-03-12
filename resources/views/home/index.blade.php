@extends('layouts.home')
@php
namespace App\Http\Controllers;
$setting=HomeController::getsetting();

@endphp

@section('title',$setting->title)








@section('content')


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





@endsection



