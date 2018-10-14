@extends('layouts.FrontLayout.master')
@section('content')

<!-- breadcrumbs start -->
<div class="breadcrumbs-area breadcrumb-bg ptb-100">
    <div class="container">
        <div class="breadcrumbs text-center">
            <h2 class="breadcrumb-title">Services</h2>
            <ul>
                <li>
                    <a class="active" href="{{ route('home') }}">Home</a>
                </li>
                <li>blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- blog area start -->
<div class="blog-fullwidth-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach ($services as $service )
            
            <div class="col-md-4 col-sm-6">
                <div class="blog-details mb-30">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{!! asset('upload/service/'.$service->image) !!}" alt=""></a>
                        <div class="blog-quick-view">
                            <a href="blog-details.html">
                                <i class="pe-7s-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-meta">
                        <h4><a href="blog-details.html">{{ $service->title_en }}</a></h4>
                        
                        <p>{!! $service->intro_en !!}</p>
                        <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
 
        </div>
    </div>
</div>
<!-- blog area end -->

    @endsection