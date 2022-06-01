<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">
    <title>Glassmaking Ewa</title>

    <link rel="stylesheet" href="{{asset('mainstyle.css')}}">
    

</head>

<body class="site">
    <header class="site-header">
        <h1 class="visually-hidden">Glass Art Ewa</h1>


        <nav class="nav-bg stickynav nav" id="main-menu">
        <div class="logo-burger-menu">
            <div>
                <a class="home" href="{{ route('home') }}"">
                    <img class="logo" src="storage/images/logo-img.jpg" alt="glass art logo">
                </a>
            </div>

            <div class="burgermenu">
                <a class="burger" href="/sitemap">
                <svg height="32px" id="burger_icon" class="burger_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 24.8 24.8" style="enable-background:new 0 0 24.8 24.8;" xml:space="preserve">
                    <g>
                        <path d="M0,3.9c0-1.1,0.9-2,2-2h20.8c1.1,0,2,0.9,2,2s-0.9,2-2,2H2C0.9,5.9,0,5,0,3.9z M22.8,10.4H2c-1.1,0-2,0.9-2,2s0.9,2,2,2
                    h20.8c1.1,0,2-0.9,2-2S23.9,10.4,22.8,10.4z M22.8,18.9H2c-1.1,0-2,0.9-2,2s0.9,2,2,2h20.8c1.1,0,2-0.9,2-2S23.9,18.9,22.8,18.9z"/>
                    </g>
                </svg> 

                <svg version="1.1" height="32px" id="close_icon" style="display: none;" version="1.1" viewBox="0 0 512 512" width="32px" xml:space="preserve">
                    <g>
                        <path d="M336.6,68.6L231,174.2l105.5,105.5c15.7,15.7,15.7,41.1,0,56.9c-7.8,7.8-18.1,11.8-28.4,11.8c-10.3,0-20.6-3.9-28.4-11.8
                            L174.2,231L68.6,336.6c-7.8,7.8-18.1,11.8-28.4,11.8c-10.3,0-20.6-3.9-28.4-11.8c-15.7-15.7-15.7-41.1,0-56.9l105.5-105.5
                            L11.8,68.6c-15.7-15.7-15.7-41.1,0-56.8c15.7-15.7,41.1-15.7,56.8,0l105.6,105.6L279.7,11.8c15.7-15.7,41.1-15.7,56.8,0
                            C352.3,27.5,352.3,52.9,336.6,68.6z"/>
                    </g>
                </svg>
                </a>
            </div>
        </div>

            <ul class="mainnav menu">
                <li><a class="nav-item aboutus-navitem" href="{{ route('gallery') }}">Gallery</a></li>
                <li><a class="nav-item" href="{{ route('workplace') }}">Workplace</a></li>
                <li><a class="nav-link nav-item" href="{{ route('contact') }}">Contact</a></li>
            </ul>

            <a href="{{route('en')}}"><img src="">en</a>
            <a href="{{route('de')}}"><img src="">de</a>
            <a href="{{route('pl')}}"><img src="">pl</a>

            
        </nav>
  
    </header>

    @yield('header')

<main>

    @yield('content')

    
</main>

<footer>

<div class="backtopbtn-cont" id="j-backtop-cont">
    <a href="#" id="scrollTop">
    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79.16 77.1"><defs><style>.cls-1{fill:#60c8d3;}.cls-2{fill:#44a8c5;}</style></defs><polygon class="cls-1" points="78.85 37.43 68.26 47.22 39.83 19.94 11.08 47.51 10.16 47.51 0 38.21 39.83 0 78.85 37.43"/><polygon class="cls-2" points="79.16 37.43 68.57 47.22 40.14 19.94 39.77 20.29 39.77 0.35 40.14 0 79.16 37.43"/><polygon class="cls-1" points="78.85 67.02 68.26 76.81 39.83 49.53 11.08 77.1 10.16 77.1 0 67.8 39.83 29.59 78.85 67.02"/><polygon class="cls-2" points="79.16 67.02 68.57 76.81 40.14 49.53 39.77 49.88 39.77 29.94 40.14 29.59 79.16 67.02"/></svg>
    </a>
</div>

<div class="footer-cont">

        <p class="footer-p">Email: glassart.piet@gmail.com</p>
        <p class="footer-small-p"><small class="footer-small">All the content on this website was created by Ewa Pietruszewska</small></p>
        <p class="footer-small-p"><small class="footer-small">Data Protection and Privacy Policy</small></p>
        
    </div>
</footer>

<script src="mainjs.js"></script>
<script src="gallery.js"></script>


</body>
</html>