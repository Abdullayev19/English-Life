<!-- Star Blog Area
============================================= -->
<div class="blog-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Blog</h5>
                    <h2>@lang('words.blog')</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-items">
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="item">
                        <div class="thumb">
                            <a href="#"><img style="height: 450px;" src="{{Voyager::image($blog->image)}}" alt="Thumb"></a>
                            <div class="date">
                                <strong>{{$blog->rating}}</strong> Ielts
                            </div>
                        </div>
                        <div class="content">
                            <h4><i class="fas fa-user text-danger"></i><a href="/blog">
                                {{$blog->name}}</a></h4>
                            <p>
                                {{$blog->description}}
                            </p>
                        </div>
                    </div>
                </div> 2
                @endforeach
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->