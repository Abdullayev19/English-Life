@extends('layouts.hf')

@section('content')
    
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(assets/img/home/home3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>@lang('words.cources')</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> @lang('words.home')</a></li>
                        <li class="active">@lang('words.cources')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <!-- Star Courses Area
    ============================================= -->
    <div class="courses-area default-padding">
        <div class="container">
            <div class="courses-items">
                <div class="row">
                    <!-- Single item -->@foreach ($cources as $cource)
                    <div class="single-item col-lg-4 col-md-6">         
                         
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{Voyager::image($cource->image)}}" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <div class="top-info">
                                    <div class="price">
                                        {{$cource->price}} sum
                                    </div>
                                </div>
                                <h4>
                                    <a href="#">{{$cource->name}}</a>
                                </h4>
                                <p>
                                    {{$cource->description}}
                                </p>
                                <div class="bottom-info">
                                    <div class="course-info">
                                        <ul>
                                            <li><i class="fas fa-clock"></i> {{$cource->time}}</li>
                                        </ul>
                                    </div>
                                    <div class="enroll">
                                        <a class="btn btn-theme effect btn-sm" href="https://englishlife.modme.uz/entry/lead?utm_source=%E2%9D%87%EF%B8%8F%E2%80%8D">@lang('words.kurs+')</a>
                                    </div>
                                </div>
                            </div>
                        </div>                           

                    </div> @endforeach
                    <!-- End Single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Courses Area -->

@endsection