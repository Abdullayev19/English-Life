@extends('layouts.hf')

@section('content')
    
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(assets/img/campus/melinda-gimpel-5Ne6mMQtIdo-unsplash.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Biz bilan bog'laning !</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> @lang('words.home')</a></li>
                        <li class="active">@lang('words.contact')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding-top">
        <div class="container">
            <div class="contact-items">
                <div class="row align-center">
                    <div class="col-lg-4 left-item">
                        <div class="info-items">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="info">
                                    <h5>@lang('words.hudud')</h5>
                                    <p>
                                        English Life, Milliy Tiklanish Street, 41, Andijan.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <h5>@lang('words.phone')</h5>
                                    <p>
                                        +998 88  624 11 11
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <h5>@lang('words.email')</h5>
                                    <p>
                                        info@yourdomain.com
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-lg-8 right-item">
                        <h5>@lang('words.contact+')</h5>
                        <h2>@lang('words.contact')</h2>
                        <form action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="@lang('words.name')" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="@lang('words.email')" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="@lang('words.phone')" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group comments">
                                                <textarea class="form-control" id="comments" name="comments"
                                                    placeholder="@lang('words.coment')"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">
                                        @lang('words.send')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Star Google Maps
    ============================================= -->
    <div class="maps-area">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12088.270126257306!2d72.3542672!3d40.7605394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd78e243afc4a3dfe!2sEnglish%20Life%20Education%20Center!5e0!3m2!1sen!2s!4v1663407536877!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Google Maps -->

@endsection