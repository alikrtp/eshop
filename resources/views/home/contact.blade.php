@extends('layouts.home')
@php namespace App\Http\Controllers; $setting=HomeController::getsetting(); @endphp

@section('title','Contact')

<!-- DİKKATT!!!!!burası indexten alınma değişecek -->

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{route('home')}}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

     <!-- Content Start -->
     <div class="container-fluid py-5">
        <div class="row px-xl-5">
        {!!$setting->contact!!}
        </div>

    </div>
    <!-- Content End -->










   <!-- Vendor Start -->

     @include('home.partial._vendor')

    <!-- Vendor End -->





@endsection
