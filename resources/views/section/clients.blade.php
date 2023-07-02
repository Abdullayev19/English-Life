<!-- Star Testimonials
============================================= -->
<div class="testimonials-area carousel-shadow default-padding-top mb-5">
    <!-- Fixed Shape -->
    <div class="fixed-shape ">
        <img src="assets/img/shape/5.png" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>@lang('words.fikrlar')</h5>
                    <h2>@lang('words.what')</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="testimonial-items text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-carousel owl-carousel owl-theme">
                        <!-- Single item -->@foreach ($clients as $client)
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-quotation"></i>
                            </div>
                            <div class="content">
                                <p>
                                    {{$client->opinion}}
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="{{Voyager::image($client->image)}}" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h5>{{$client->name}}</h5>
                                    <span>{{$client->job}}</span>
                                </div>
                            </div>

                        </div>                            @endforeach

                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area -->