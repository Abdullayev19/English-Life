@extends('layouts.hf')

@section('content')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(assets/img/home/cherrydeck-rMILC1PIwM0-unsplash.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1> @lang('words.about')</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> @lang('words.home')</a></li>
                        <li class="active">@lang('words.about')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-area default-padding-top">
        <!-- Fixed Shape -->
        <div class="fixed-shape-bottom">
            <img src="assets/img/shape/12.png" alt="Shape">
        </div>
        <!-- End Fixed Shape -->
        <div class="container">
            <div class="about-items">
                <div class="row align-center">

                    @foreach ($abouts as $about)
                        

                    <div class="col-lg-6 info">
                        <h2>
                           {{$about->title}}
                        </h2>
                        <p>
                            {{$about->description}}
                        </p>
                        <ul>
                            <li>
                                <div class="fun-fact">
                                    <span class="timer" data-to="{{$about->lessons}}" data-speed="5000"></span>
                                    <span class="medium">@lang('words.dars')</span>
                                </div>
                            </li>
                            <li>
                                <div class="fun-fact">
                                    <span class="timer" data-to="{{$about->students}}" data-speed="5000"></span>
                                    <span class="medium">@lang('words.student')</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 thumb">
                        <img src="{{Voyager::image($about->image)}}" alt="Thumb">
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Star Why Chose Us
    ============================================= -->
    <div class="why-choseus-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>@lang('words.glad')</h5>
                        <h2>@lang('words.full')</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Fixed BG -->
        <div class="container-full">
            <div class="info">
                <div class="row">
                    @foreach ($videos as $video)
                    <div class="single-item thumb col-lg-5">
                        <div class="thumb-box">
                            <img src="{{Voyager::image($video->VideoImage)}}" alt="Thumb">
                            <a href="{{$video->VideoLink}}"
                                class="popup-youtube light video-play-button item-center">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Chose Us -->

    <!--Audios from our students -->

    <div class="audios mt-4">
        <div class="title">
            <div class="site-heading text-center">
                <h5>@lang('words.audios')</h5>
                <h2>@lang('words.audio')</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5">
            <div class="single-item thumb col-lg-4" style="display: flex; flex-direction: column; align-items: center">
                <div class="d-flex mb-4">
                    <div class="images mr-2">
                        <img src="assets/img/avatar.jpg" style="width: 60px ; height: 60px ; object-fit: contain; border-radius:50px;" />
                    </div>
                    <div class="text">
                        <h5 class="pt-3">Abdurahmon Nuraliyev</h5>
                        <p></p>
                    </div>
                </div>
                <audio controls>
                    <source src="horse.ogg" type="audio/ogg">
                    <source src="horse.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div class="single-item thumb col-lg-4 " style="display: flex; flex-direction: column; align-items: center">
                <div class="d-flex mb-4">
                    <div class="images mr-2">
                        <img src="assets/img/avatar.jpg" style="width: 60px ; height: 60px ; object-fit: contain; border-radius:50px;" />
                    </div>
                    <div class="text mb-4">
                        <h5 class="pt-3">Abdurahmon Nuraliyev</h5>
                        <p></p>
                    </div>
                </div>
                <audio controls>
                    <source src="horse.ogg" type="audio/ogg">
                    <source src="horse.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
            <div class="single-item thumb col-lg-4" style="display: flex; flex-direction: column; align-items: center">
                <div class="d-flex mb-4">
                    <div class="images mr-2">
                        <img src="assets/img/avatar.jpg" style="width: 60px ; height: 60px ; object-fit: contain; border-radius:50px;" />
                    </div>
                    <div class="text">
                        <h5 class="pt-3">Abdurahmon Nuraliyev</h5>
                        <p></p>
                    </div>
                </div>
                <audio controls>
                    <source src="horse.ogg" type="audio/ogg">
                    <source src="horse.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </div>
    <!--End Audios from our students -->

    <!-- Start Video Area
    ============================================= -->
    @foreach ($detals as $detal)
        
   
    <div class="video-area padding-xl text-center bg-fixed text-light shadow dark-hard"
        style="background-image: url({{voyager::image($detal->image)}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="video-heading">
                        <div class="content">
                            <h2>{{$detal->title}}.</h2>
                            <p>
                                {{$detal->description}}
                            </p>
                        </div>
                        <a class="popup-youtube relative video-play-button"
                            href="{{$detal->link}}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> @endforeach
    <!-- End Video Area -->

    <!-- Star Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5>Gallereya</h5>
                        <h2>@lang('words.galery')</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="magnific-mix-gallery masonary">
                <div id="portfolio-grid" class="gallery-items colums-3">
                    <!-- Single Item -->
                    @foreach ($galleries as $gallery)
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="{{Voyager::image($gallery->image)}}" alt="Thumb">
                            <div class="effect-info">
                                <a href="{{Voyager::image($gallery->image)}}" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Biz haqimizda yozuvlarda -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mb-3">
                @foreach ($mores as $more)
                <h2>{{$more->title}}</h2>
                <p>{{$more->description}}</p>  
                @endforeach
            </div>
        </div>
    </div>


@endsection