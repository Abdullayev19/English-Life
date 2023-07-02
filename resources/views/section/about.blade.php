<!-- Star About Area
============================================= -->
<div class="about-area inc-fixed-bg default-padding-bottom">
    @foreach ($abouts as $about)
        
    
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-image: url({{Voyager::image($about->image)}});"></div>
    <!-- End Fixed BG -->
    <div class="container">
        <div class="about-items">
            <div class="row align-center">

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
                    <a class="btn circle btn-md btn-gradient" href="/about">@lang('words.about')</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- End About Area -->