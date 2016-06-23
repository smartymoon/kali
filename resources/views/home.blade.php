@extends('layouts.master')
@section('title', 'Page Title')
@section('local_css')
@endsection
@section('local_js')
<script src="{{asset('js/home.js')}}"></script>
@endsection
@section('content')
<div class="container-fluid">
    @include('home_pieces.home-slider')
</div>
<div class="container">
    @include('home_pieces.home-video')
    @include('home_pieces.home-products')
    @include('home_pieces.home-map')
    @include('home_pieces.home-five')
    @include('home_pieces.home-cases')
    @include('home_pieces.home-renzheng')
</div>
@endsection
