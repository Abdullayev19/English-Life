@extends('layouts.hf')

@section('content')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(assets/img/campus/advicer.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>@lang('words.our')</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> @lang('words.home')</a></li>
                        <li class="active">@lang('words.mentor')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Advisor Area
    ============================================= -->
    <div class="advisor-area default-padding bottom-less">
        <div class="container">
            <div class="advisor-items text-center">
                <div class="row">
                    <!-- Single Item -->@foreach ($advisors as $advisor)

                    <div class="single-item col-lg-3 col-md-6">
                        <div class="item">


<div class="thumb">
    <img style="max-height: 300px;" src="{{Voyager::image($advisor->image)}}" alt="Thumb">
    <ul>
        <li class="facebook">
            <a href="{{$advisor->flink}}">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="twitter">
            <a href="{{$advisor->tlink}}">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="linkedin">
            <a href="{{$advisor->llink}}">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </li>
    </ul>
</div>
<div class="info">
    <h4><a href="#">{{$advisor->name}}</a></h4>
    <span>{{$advisor->job}}</span>
</div>


                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- End Advisor Area -->

@endsection