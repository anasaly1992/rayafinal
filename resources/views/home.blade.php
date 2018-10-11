@extends('layouts.FrontLayout.master')
@section('content')
    <!-- slider start -->
    <div class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                @foreach($sliders as $slider)
              @php $flag = 1 ;
              
              $imagePath =      '/upload/slideshow/'.$slider->img ; @endphp
                <img src="{{asset($imagePath)}}" alt="" title="#slider-direction-{{ $flag }}" />
                @php
                $flag++  ;
                @endphp
                @if($flag == 3 )
                @php
                $flag = 1 ;
                @endphp 
                @endif 
                @endforeach
                
            </div>
            <!-- direction 1 -->
              @foreach($sliders as $slider)
               @php $flag = 1 ; @endphp
            <div id="slider-direction-{{$flag}}" class="t-cn slider-direction">
                <div class="container">
                    <div class="slider-content t-lfl s-tb slider-{{$flag}}">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">{{ $slider->title_en }}</h1>
                           <h2 class="title2">{{ $slider->intro_en }}</h2>
                            <h3 class="title3">{{ $slider->details_en }}</h3> 
                            <a class="btn-hover" href="{{$slider->link}}">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
                @php
                $flag++  ;
                @endphp
                @if($flag == 3 )
                 @php
                $flag = 1 ;
                @endphp 
                @endif 
            @endforeach
            <!-- direction 2 -->
        </div>
    </div>
    <!-- slider end -->
     <!-- service area start  -->
    <div class="service-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="single-service addm">
                        <div class="service-icon">
                            <i class="fa fa-bus"></i>
                        </div>
                        <div class="service-text">
                            <h3>FREE SHIIPPING</h3>
                            <p>Guaranteed delivery</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-service addm">
                        <div class="service-icon">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="service-text">
                            <h3>MONEY BACK</h3>
                            <p>30 Days return guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-service addm">
                        <div class="service-icon">
                            <i class="pe-7s-headphones"></i>
                        </div>
                        <div class="service-text">
                            <h3>online support</h3>
                            <p>Call us {{$settings->phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="service-text">
                            <h3>BONUS PLUS</h3>
                            <p>Make fun of shopping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- shop area start -->
    <div class="portfolio-area ptb-100">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>Featured Collections <i class="fa fa-shopping-cart"></i></h2>
            </div>
            <div class="shop-menu portfolio-left-menu text-center mb-50">
                <button class="active" data-filter="*">ALL</button>
                @foreach($categories as $category)
                <button data-filter=".mix{{$category->id}}">{{$category->name_en}} </button>
                @endforeach
            </div>
            <div class="row portfolio-style-2">
                <div class="grid">


                    @foreach($products as $product)
                   
                    <div class="col-md-3 col-sm-6 col-xs-12 grid-item mix{{$product->category->id}} mb-50">
                        <div class="single-shop">
                            <div class="shop-img">
                                @php
                               $imagePath = 'upload/product/'.$product->img_main ;
                                @endphp
                                <a href="#"><img src="{{asset($imagePath)}}" alt="" /></a>
                                @if($product->price_after < $product->price )
                                <div class="price-up-down">
                                    <span class="sale-new">sale</span>
                                </div>
                                @endif
                                <div class="button-group">
                                    <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                    <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#quick-view{{$product->id}}" title="Quick View">
                                        <i class="pe-7s-look"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="shop-text-all">
                                <div class="title-color fix">
                                    <div class="shop-title f-left">
                                        <h3><a href="#">{{$product->name_en}}</a></h3>
                                    </div>
                                    <div class="price f-right">
                                        <span class="new">{{$currency->name_en.$product->price}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                  
                   
    
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="hvr-shutter-out-horizontal" href="shop-page.html">view more</a>
            </div>
        </div>
    </div>
    <!-- shop area end -->
    <!-- subscribe area start -->
    <div class="offer-area shop-text bg-opacity-black-90">
        <div class="container">
            <div class="subscribe-bg ptb-80">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                        <div class="offer-text text-center">
                            <h3>unlimited offer</h3>
                            <div class="text-center">
                                <a class="hvr-shutter-out-horizontal" href="shop-page.html">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end -->
    <!-- special-offer area start -->
    <div class="special-offer ptb-100">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>  Collections <i class="fa fa-shopping-cart"></i></h2>
            </div>
            <div class="row">
                <div class="special-slider-active owl-carousel">
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="assets/img/shop/equal/1.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view{{$product->id}}">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view{{$product->id}}">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view{{$product->id}}" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">{{$product->name_en}}}</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$120.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="assets/img/shop/equal/2.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">Handbag</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$670.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="assets/img/shop/equal/3.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">Perfume</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$340.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="single-shop">
                                <div class="shop-img">
                                    <a href="#"><img src="assets/img/shop/equal/4.jpg" alt="" /></a>
                                    <div class="price-up-down">
                                        <span class="sale-new">new</span>
                                    </div>
                                    <div class="button-group">
                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="shop-text-all">
                                    <div class="title-color fix">
                                        <div class="shop-title f-left">
                                            <h3><a href="#">Shirt</a></h3>
                                        </div>
                                        <div class="price f-right">
                                            <span class="new">$230.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- special-offer area end -->
    
    <!-- special-offer area start -->
     <div class="special-offer ptb-100">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>New Collections <i class="fa fa-shopping-cart"></i></h2>
            </div>
            <div class="row">
                <div class="special-slider-active owl-carousel">
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            
                                <div class="member">
                                    <div class="img"><img src="{{asset('assets/img/team/pirson.jpg')}}" alt="pirson"></div>
                                    <h4>John Doe</h4>
                                    <p>اLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                                  
                                  </div>
                                
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="member">
                                <div class="img"><img src="{{asset('assets/img/team/pirson.jpg')}}" alt="pirson"></div>
                                  <h4>John Doe</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                    </p>
                                
                                </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="member">
                                <div class="img"><img src="{{asset('assets/img/team/pirson.jpg')}}" alt="pirson"/></div>
                                  <h4>John Doe</h4>
                                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                                
                                </div>
                        </div>
                    </div>
                    <div class="single-special-slider">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="member">
                                <div class="img"><img src="{{asset('assets/img/team/pirson.jpg')}}" alt="pirson"/></div>
                                  <h4>John Doe</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                    
                    </p>
                                
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- special-offer area end -->




    <!-- blog area end -->
    <!-- subscribe area start -->
    <div class="subscribe-area gray-bg">
        <div class="container">
            <div class="subscribe-bg ptb-80">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 ">
                        <div class="subscribe-from text-center">
                            <h3>subscribe to our newsletter</h3>
                            <form action="#">
                                <input placeholder="Enter your Email address" type="email">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe area end -->
@endsection

   
