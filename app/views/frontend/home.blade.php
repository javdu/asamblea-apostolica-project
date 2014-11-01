@extends('layouts.frontend')
@section('content')
    <div class="row">
        <div class="col-md-12" >
            <div id="myCarousel" class="carousel slide">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
              </ol>
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item"><img  src="{{asset('assets/img/jovenes-img2.jpg')}}" alt="banner1" /></div>
                <div class="item"><img  src="{{asset('assets/img/jovenes-img1.jpg')}}" alt="banner2" /></div>
                <div class="item"><img  src="{{asset('assets/img/jovenes-img3.jpg')}}" alt="banner3" /></div>
                <div class="item"><img  src="{{asset('assets/img/jovenes-img4.jpg')}}" alt="banner4" /></div>
                <div class="item"><img  src="{{asset('assets/img/jovenes-img5.jpg')}}" alt="banner5" /></div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 0px;">
        <div class="col-md-5 music-top">
            <h2 style="text-align: center;">TOP 5 - TUS FAVORITOS</h2>
            <div id="list">
                <ul>
                    <li><img src="{{asset('assets/img/icons/musical.png')}}" /><p>1 - Evan Craft - Todo debo a El.</p><audio src="{{asset('assets/mp3/TodoDeboAEl.mp3')}}" controls></audio></li>
                    <li><img src="{{asset('assets/img/icons/musical.png')}}" /><p>2 - Evan Craft - Todo debo a El.</p><audio src="{{asset('assets/mp3/TodoDeboAEl.mp3')}}" controls></audio></li>
                    <li><img src="{{asset('assets/img/icons/musical.png')}}" /><p>3 - Evan Craft - Todo debo a El.</p><audio src="{{asset('assets/mp3/TodoDeboAEl.mp3')}}" controls></audio></li>
                    <li><img src="{{asset('assets/img/icons/musical.png')}}" /><p>4 - Evan Craft - Todo debo a El.</p><audio src="{{asset('assets/mp3/TodoDeboAEl.mp3')}}" controls></audio></li>
                    <li><img src="{{asset('assets/img/icons/musical.png')}}" /><p>5 - Evan Craft - Todo debo a El.</p><audio src="{{asset('assets/mp3/TodoDeboAEl.mp3')}}" controls></audio></li>
                </ul>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12 versiculo-del-dia-home">
                    <h2 style="text-align: center;">VERSICULO DEL DIA</h2>
                </div>
                <div class="col-md-12 reflexion-semanal-home">
                    <h2 style="text-align: center;">REFLEXION SEMANAL</h2>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.myCarousel').carousel('cycle'); 
        });
    </script>
@stop
