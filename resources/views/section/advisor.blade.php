<!-- Star Advisor Area
============================================= -->
<div class="advisor-area default-padding bottom-less">
    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-5">
                    <h5>@lang('words.maslahat')</h5>
                    <h2>
                        @lang('words.tutor')
                    </h2>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <p>
                        @lang('words.qisqacha')
                    </p>
                    <a class="btn btn-md btn-dark border" href="/advisors">@lang('words.+') <i
                        class="fas fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="advisor-items text-center">
            <div class="row">
                <!-- Single Item -->

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
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Advisor Area -->