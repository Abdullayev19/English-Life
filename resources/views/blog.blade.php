@extends('layouts.hf')

@section('content')

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover"
        style="background-image: url(assets/img/kobu-agency-7okkFhxrxNw-unsplash.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>@lang('words.blog+')</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> @lang('words.home') </a></li>
                        <li class="active">@lang('words.blog+')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="blog-content">
                    <div class="blog-item-box">
                        <div class="row">
                            <!-- Single Item -->

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
                                        <h4>
                                            <i class="fas fa-user text-danger"></i>
                                            <a href="/blog">
                                            {{$blog->name}}</a>
                                        </h4>
                                        <p>
                                            {{$blog->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                            <!-- End Single Item -->
                        </div>

                        {{-- <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area text-center">
                                <nav aria-label="navigation">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

@endsection