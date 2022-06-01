@extends('layouts.app')

@section('header')
<div class="background-img-gallery">
    <div class="about-cont">
        <h2 class="heading2-style">@lang('pages.gallery')</h2>
    </div>
</div>  
@endsection

@section('content')

 <form action="{{isset($image) ? route('admin.gallery.update', [$image]) : route('admin.gallery.create')}}" method="POST" enctype="multipart/form-data"> 
<!-- <form action="{{route('admin.gallery.create')}}" method="POST" enctype="multipart/form-data"> -->
@csrf
<input type="text" name="title">
<input type="file" name="image">
<input type="file" name="thumbnail">
<input type="submit" value="save">

</form>

@endsection
