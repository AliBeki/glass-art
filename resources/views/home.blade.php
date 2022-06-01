@extends('layouts.app')

@section('header')
<div class="background-img-home">
    <div class="home-cont">
        <img src="{{url('storage/images/logo-img.png')}}" alt="background image of glass art">
    </div>
</div>  
@endsection

@section('content')


<div class="home-cont">
    <h2 class="heading2-style2">Glass Art</h2>
</div>

<div class="about-cont">
    <img src="{{url('storage/images/gallery/originalimage14.jpg')}}" alt="image of glass art">
    <div class="text-cont">
    @if (app()->getLocale() === 'de') 
        <h3 class="heading3-style">Über Mich</h3>
        <p>Glas – zuerst eine Faszination, dann ein Hobby und schließlich ein handwerklicher und künstlerischer Werkstoff.</p>
        <p>Ich bin Absolventin der Molekularbiologie, aber für Glas und insbesondere für Glasmalerei habe ich ein postgraduales Studium an der Akademie der Bildenden Künste in Wrocław abgeschlossen.</p>
        <p>Mein Atelier ist ein Ort, an dem ich gerne bin und arbeite. Jedes neue Projekt ist eine lang ersehnte Herausforderung für meine Vorstellungskraft und mein technisches Können.</p>
      
     @elseif (app()->getLocale() === 'pl')

         <h3 class="heading3-style">O Mnie</h3>
        <p>Szkło - początkowo moja fascynacja, potem hobby, a w końcu tworzywo rzemieślnicze i artystyczne.</p>
        <p>Z wykształcenia jestem magistrem biologii molekularnej, ale dla szkła, a w szczególności dla witrażu, ukończyłam studia podyplomowe na Akademii Sztuk Pięknych we Wrocławiu.</p>
        <p>Moja pracownia jest miejscem, w którym uwielbiam przebywać i pracować. Każdy nowy projekt jest wyczekiwanym wyzwaniem dla mojej wyobraźni i umiejętności technicznych. Nagrodą za pracę jest gotowy witraż, który dopiero po całkowitym ukończeniu można podnieść w górę i obejrzeć pod światło. Efekt zawsze daleko przewyższa to, czego się spodziewałam rysując projekt, bowiem szkło i światło żyją własnym życiem zależnym od pory dnia i pory roku.</p>

    @else 

        <h3 class="heading3-style">About Me</h3>
        <p>Glass - at first my fascination, then a hobby, and eventually my craft.</p>
        <p></p>
        <p>My studio is a place in which I love to work, and be. Every project is a much anticipated challenge for my imagination and my technical abilities.</p>
       
    @endif 
    </div>
</div>

<div class="text-cont3">

 @if (app()->getLocale() === 'de') 

    <p>Der Lohn der Arbeit ist ein fertiges Buntglasfenster, das erst nach Fertigstellung nach oben gehoben und gegen das Licht betrachtet werden kann. Die Wirkung übertrifft immer bei weitem das, was ich beim Zeichnen eines Projekts erwartet hatte, denn Glas und Licht haben je nach Tages- und Jahreszeit ein Eigenleben.</p>
    <p>Mein Traum ist, dass die Menschen Buntglas nicht nur dort sehen und bewundern, wo sie sind, sondern sich auch wünschen, dass es in zeitgenössischen Innenräumen präsent ist. Ich möchte, dass die Kunst der Glasmalerei nicht verloren geht und gebe daher mein Wissen gerne an andere weiter.</p>

@elseif (app()->getLocale() === 'pl')

    <p>The reward for my work, is a perfectly completed piece of stained glass, which only when finished, can be picked up and looked at under the light. The effect often far outweighs what I first expected when sketching out the project, because glass and light live their own life, independent of the time of day, or time of year.</p>
    <p>My dream is that people not only see and admire stained glass where they are, but also desire their presence in contemporary interiors. I would like the art of creating stained glass not to be lost, therefore I will happily pass on my knowledge to others.</p>

 @else 

    <p>The reward for my work, is a perfectly completed piece of stained glass, which only when finished, can be picked up and looked at under the light. The effect often far outweighs what I first expected when sketching out the project, because glass and light live their own life, independent of the time of day, or time of year.</p>
    <p>My dream is that people not only see and admire stained glass where they are, but also desire their presence in contemporary interiors. I would like the art of creating stained glass not to be lost, therefore I will happily pass on my knowledge to others.</p>

 @endif 

</div>

<div class="home-img-cont">
        <img src="{{url('storage/images/gallery/image6.png')}}" alt="image of glass art of flowers">
       <img src="{{url('storage/images/gallery/image4.png')}}" alt="image of glass art of a landscape">
        <img src="{{url('storage/images/gallery/image5.png')}}" alt="image of glass art of a ship">
</div>

    <div class="about-cont">
        @if (app()->getLocale() === 'de') 
            <a class="seemore-style" href="{{ route('gallery') }}">Sehe Mehr</a>
        @elseif (app()->getLocale() === 'pl')
            <a class="seemore-style" href="{{ route('gallery') }}">Zobacz Wiecej</a>
        @else 
            <a class="seemore-style" href="{{ route('gallery') }}">See More</a>
        @endif 
    </div>

    <div class="info-cont-inverted">
    <img src="storage/images/gallery/originalimage6.jpg" alt="Glass art of flowers">
        <div class="contact-formular-cont imgtext-cont">
            <h3 class="headingtext-style">Contact Me!</h3>
            <p class="text-cont2">If you have any questions or thoughts to share, feel free to contact me.</p>
            <a class="seemore-style" href="{{ route('contact') }}">Contact</a>
        </div>
</div>


@endsection