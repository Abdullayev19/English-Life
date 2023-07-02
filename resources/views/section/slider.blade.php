<!-- Start Banner
============================================= -->
<div class="banner-area bg-gray text-center multi-heading">
    <div id="bootcarousel" class="carousel text-light slide carousel-fade animate_text" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-zoom">
            {{-- <div class="carousel-item ">
                <div class="slider-thumb bg-cover" style="background-image: url(assets/img/campus/campus6.jpg);"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row col-lg">
                                <div class="single-item thumb col-lg-6">
                                    <div class="thumb-box">
                                        <img src="assets/img/campus/campus6.jpg" alt="Thumb">
                                        <a href="https://www.youtube.com/watch?v=ycY7yXX_tX4"
                                           class="popup-youtube light video-play-button item-center">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-item thumb col-lg-5">
                                    <div class="thumb-box">
                                        <h3>Public speaking tadbirimizga marhamat</h3>
                                        <p>Kelayotgan payshanba Saralab olingan o’quvchilar o’rtasida Public Speaking bo’lib o’tadi. Ushbu tadbirga qatnashgan o’quvchilar belgilangan hakamlar tomonidan tegishli tartibda har bir nutqi uchun fikrlar olishadi bu esa tadbirda qatnashgan va uni tomosha qilgan barcha uchun manfaatli bo’ladi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
                
           
            <div class="carousel-item">
                @foreach ($sliders as $slider)
                <div class="slider-thumb bg-cover" style="background-image: url({{Voyager::image($slider->image)}});"></div>
                <div class="box-table shadow dark">
                    <div class="box-cell">
                        <div class="container">
                            <div class="row col-lg">
                                <div class="single-item thumb col-lg-6">
                                    <div class="thumb-box">
                                        <img src="{{Voyager::image($slider->videoImage)}}" alt="Thumb">
                                        <a href="{{$slider->videoLink}}"
                                           class="popup-youtube light video-play-button item-center">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="single-item thumb col-lg-5">
                                    <div class="thumb-box">
                                        <h3>{{$slider->title}}</h3>
                                        <p>{{$slider->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
        <!-- End Wrapper for slides -->

        <!-- Left and right controls -->
        <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
            <i class="ti-angle-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
            <i class="ti-angle-right"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
<!-- End Banner -->