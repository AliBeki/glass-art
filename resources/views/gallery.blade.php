@extends('layouts.app')

@section('header')
<div class="background-img-gallery">
    <div class="about-cont">
        <h2 class="heading2-style">@lang('pages.gallery')</h2>
    </div>
</div>  
@endsection

@section('content')

<div id="image-reveal">
    <div id="reveal-background"></div>
    <img id="show-image" src="#" alt="gallery image">

    <p id="reveal-title"></p>

    <div id="gallery-buttons">
        <button type="button" id="galleryPrevious" class="gallery-button"><</button>
        <button type="button" id="galleryNext" class="gallery-button">></button>
    </div>
</div>

  <div class="gallery-cont">
    <ul class="gallery-ul gallery_list">

    @foreach($images as $image)

     <li class="gallery-li">
            <a class="image-link" href="{{asset("{$image->image}")}}">
                <img src="{{asset("{$image->thumbnail}")}}" alt="{{$image->title}}">
            </a>
            <p class="galleryimgtext js-gallerytext">{{$image->title}}</p>
           
        @if (Auth::check())
            <a href="{{route('admin.gallery.edit', [$image])}}">Edit</a>
            <a href="{{route('admin.gallery.delete', [$image])}}">Delete</a>
         @endif

    </li>

    @endforeach

    @if (Auth::check())

            <a href="{{route('admin.gallery.add')}}">Add</a>

    @endif

    </ul>


    </div>

@endsection
