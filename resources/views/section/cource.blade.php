<!-- Star Courses Area
============================================= -->
<div class="courses-area trend-layout bg-gray default-padding bottom-less">
    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-5">
                    <h5>@lang('words.famous')</h5>
                    <h2>
                        @lang('words.kurs')
                    </h2>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <p>
                        @lang('words.qisqacha')
                    </p>
                    <a class="btn btn-md btn-dark border" target="_blank"
                       href="https://englishlife.modme.uz/entry/lead?utm_source=%E2%9D%87%EF%B8%8F%E2%80%8D">@lang('words.kurs+') <i class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="courses-items">
            <div class="row">
                <!-- Single item -->
                @foreach ($cources as $cource)
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="#">
                                <img src="{{voyager::image($cource->image)}}" alt="Thumb">
                            </a>
                        </div>
                        <div class="info">
                            <div class="top-info">
                                <div class="price">
                                    {{$cource->price}} sum.
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
                                    <a class="btn btn-theme effect btn-sm" href="course-details.htmlq">@lang('words.kurs-')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Single item -->
            </div>
        </div>
    </div>
</div>
<!-- End Courses Area -->