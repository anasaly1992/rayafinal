@extends('layouts.FrontLayout.master')
@section('content')
@php
use Illuminate\Support\Facades\URL;
@endphp
<!-- breadcrumbs start -->
<!--  //   'code', 'name_en', 'name_ar', 'info_en', 'info_ar', 'description_en', 
        //  'description_ar', 'price','price_after', 'otherData', 'quantity', 
        //  'img_main', 'slug', 'order', 'status', 'category_id', -->
      
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title">{{$product->name_en}}</h2>
                <ul>
                    <li>
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>{{$product->name_en}}</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- breadcrumbs area end -->
    <!-- single product area start -->
    <div class="single-product-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="product-details-tab">
                        <!-- Tab panes -->
                        <div class="tab-content">
                           @php 
                           $flag=0;
                           @endphp
                            @foreach($images as $image)
                            <div class="tab-pane @if($flag ==0 ) {{ 'active' }} @endif" id="{{ $image->id  }}">
                                <div class="large-img">
                                    <img src="{!!asset('upload/product/other/'.$image->img_name)!!}" alt="{{$product->name_en}}" />
                                </div>
                            </div>
                            @php 
                            $flag++;
                            @endphp
                        @endforeach
                        </div>
                        @php 
                        $flag=0;
                        @endphp
                        <!-- Nav tabs -->
                        <div class="details-tab owl-carousel">
                            @foreach($images as $image)
                            <div><a @if($flag == 0 )  {{ "class='active'" }} @endif href="#{{ $image->id }}" data-toggle="tab"><img src="{!!asset('upload/product/other/'.$image->img_name)!!}" alt="{{$product->name_en}}" /></a></div>
                            @php 
                            $flag++;
                            @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <div class="single-product-dec pb-30  for-pro-border">
                            <h2>{{$product->name_en}}</h2>
                           
                            <h3>Price: {{$product->price_after}} $</h3>
                            <p>{!!$product->info_en!!}</p>
                        </div>
                        <div class="single-cart-color for-pro-border">
                            <p>availability : 
                                @if($product->quantity > 0)
                                <span>in stock</span>
                                @else
                                <span>Not Available</span>
                                @endif                                
                            </p>
                            <div class="pro-color pro-color-style-2">
                                <p>color :</p>
                                <ul>
                                    <li class="blue">b</li>
                                    <li class="orange">o</li>
                                    <li class="purple">p</li>
                                    <li class="pink">p</li>
                                </ul>
                            </div>
                            <div class="pro-color-size">
                                <p>size :</p>
                                <ul>
                                    <li><a href="#">xs</a></li>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">xl</a></li>
                                </ul>
                            </div>
                            <div class="model">
                                <p>model : <span>{{$product->code}}</span></p>
                            </div>
                            <div class="pro-quality">
                                <p>Quantity:</p>
                                <input value="1" type="number">
                            </div>
                            <div class="single-pro-cart">
                                <a href="#" title="Add to Cart">
                                        <i class="pe-7s-cart"></i>
                                        add to cart
                                    </a>
                                <!-- <a href="#" title="wishlist">
                                        <i class="pe-7s-like"></i>
                                        wishlist
                                    </a> -->
                            </div>
                        </div>
                        <div class="pro-category-tag ptb-30 for-pro-border">
                            <div class="pro-category">
                                <p>categories :</p>
                                <ul>
                                    <li><a href="#">{{$product->category->name_en}}</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        <div class="pro-shared">
                            <p>shared :</p>
                            {{--  <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            </ul>  --}}
                            
                            <?php  echo Share::page(URL::current(),$product->name_en)
                            ->facebook()
                            ->twitter()
                            ->googlePlus()
                            ->linkedin();; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single product area end -->
    <!-- single product area end -->
    <div class="single-product-dec-area">
        <div class="container">
            <div class="single-product-dec-tab">
                <ul role="tablist">
                    <li class="active">
                        <a href="#description" data-toggle="tab">
                            description
                        </a>
                    </li>
                    <li>
                        <a href="#reviews" data-toggle="tab">
                            Notes
                        </a>
                    </li>
                </ul>
            </div>
            <div class="single-product-dec pb-100">
                <div class="tab-content">
                    <div class="tab-pane active" id="description">
                        <p> {!!$product->description_en!!}</p>
                    </div>
                    <div class="tab-pane" id="reviews">
                        <div class="customer-reviews-all">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>{!!$product->otherData!!}</p>
                                  
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-tab pb-100">
                <div class="home-2-tab">
                    <ul role="tablist">
                        <li class="active">
                            <a href="#dresses" data-toggle="tab">
                                    related Product 
                                </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="dresses">
                        <div class="row">
                            <div class="product-curosel product-curosel-style owl-carousel">
                            @foreach($related_product as $product)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                         <a href="#">
                                          <img src="{!! asset('upload/product/'.$product->img_main) !!}"  alt="{{ $product->name_en }}"/>
                                            </a>
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
                                                <a href="#" data-toggle="modal" data-target="#quick-view{{$product->id}}" title="Quick View">
                                                    <i class="pe-7s-look"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="{{ route('product_details.show',$product->id) }}">{{$product->name_en}}</a></h3>
                                                </div>
                                                <div class="price f-right">
                                                    <span class="new">{{$product->price_after}} $</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
    <!-- single product area end -->
   
    @endsection