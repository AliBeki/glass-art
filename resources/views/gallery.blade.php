@extends('layouts.app')

@section('header')
<div class="background-img-gallery">
    <div class="about-cont">
        <h2 class="heading2-style">Gallery</h2>
    </div>
</div>  
@endsection

@section('content')

<div id="image-reveal">
    <div id="reveal-background"></div>
    <img id="show-image" src="#" alt="gallery image">

    <div id="gallery-buttons">
        <button type="button" id="galleryPrevious" class="gallery-button"><</button>
        <button type="button" id="galleryNext" class="gallery-button">></button>
    </div>
</div>

  <div class="gallery-cont">
    <ul class="gallery-ul gallery_list">
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage1.jpg">
                <img src="storage/images/gallery/image1.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage2.jpg">
                <img src="storage/images/gallery/image2.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage3.jpg">
                <img src="storage/images/gallery/image3.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage4.jpg">
                <img src="storage/images/gallery/image4.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage5.jpg">
                <img src="storage/images/gallery/image5.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage6.jpg">
                <img src="storage/images/gallery/image6.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage7.jpg">
                <img src="storage/images/gallery/image7.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage8.jpg">
                <img src="storage/images/gallery/image8.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage9.jpg">
                <img src="storage/images/gallery/image9.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage10.jpg">
                <img src="storage/images/gallery/image10.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage11.jpg">
                <img src="storage/images/gallery/image11.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage12.jpg">
                <img src="storage/images/gallery/image12.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage13.jpg">
                <img src="storage/images/gallery/image13.png" alt="">
            </a>
        </li>
        <li class="gallery-li">
            <a  href="storage/images/gallery/originalimage14.jpg">
                <img src="storage/images/gallery/image14.png" alt="">
            </a>
        </li>
    </ul>
    </div>

@endsection
