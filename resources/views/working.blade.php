@extends('layouts.app')

@section('header')
<div class="background-img-about">
    <div class="about-cont">
        <h2 class="heading2-style">Working in Vienna</h2>
    </div>
</div>  
@endsection

@section('content')
<div class="second-menu-cont sticky-side-menu">
        <ul class="side-menu">
            <li class="maintopic"><a id="location-menu" href="#location">Location</a></li>
            <li class="maintopic"><a id="politics-menu" href="#politics">Politics</a></li>
            <li class="maintopic"><a id="economy-menu" href="#economy">Economy</a></li>
            <li class="maintopic"><a id="history-menu" href="#history">History</a></li>
            <li class="maintopic"><a id="attractions-menu" href="#attractions">Attractions</a></li>
        </ul>
    </div>

    <div>

    <div id="location" class="content-cont">
        <h3 class="heading3-style">Location</h3>
        <div class="content-img-cont">
            <img src="" alt="">
        </div>
        <p class="content-p"></p>
    </div>


    <div id="politics" class="content-cont">
        <h3 class="heading3-style">Politics</h3>
            <div class="content-img-cont">
                <img src="" alt="">
            </div>
        <p class="content-p"></p>
    </div>

    <div id="economy" class="content-cont">
            <h3 class="heading3-style">Economy</h3>
                <div class="content-img-cont">
                    <img src="" alt="">
                </div>
            <p class="content-p"></p>
    </div>

     <div id="history" class="content-cont">
            <h3 class="heading3-style">History</h3>
                <div class="content-img-cont2">
                    <img src="" alt="">
                </div>
            <p class="content-p"></p>
    </div>

    <div id="attractions" class="content-cont">
        <h3 class="heading3-style">Attractions</h3>
            <div class="content-img-cont">
                 <img src="" alt="">
            </div>
        <p class="content-p"></p>
    </div>


</div>
@endsection
