@extends('layouts.app')

@section('header')
<div class="background-img-home">
    <div class="home-cont">
        <img src="{{url('storage/images/logo-img.png)}}" alt="background image">
    </div>
</div>  
@endsection

@section('content')


<div class="home-cont">
    <h2 class="heading2-style2">Glass Art</h2>
</div>

<div class="about-cont">
    <img src="{{url('storage/images/aboutmephoto.png)}}" alt="about image">
    <div class="text-cont">
        <h3 class="heading3-style">About Me</h3>
        <p>Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
</div>

@endsection