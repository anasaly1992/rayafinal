@extends('layouts.FrontLayout.master')
@section('content')
<div class="shop-page-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Choose Price</h3>
                            <div class="price-filter">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div>
                                <div class="price-slider-amount">
                                    <input type="text" id="amount" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Category</h3>
                            <div class="sidebar-list">
                                <ul>
                                   @foreach($categories as $category)
                                    <li><input type="checkbox"> <a href="#">{{$category->name_en}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Choose color</h3>
                            <div class="sidebar-list">
                                <ul>
                                    <li><input type="checkbox"> <a href="#">red (8)</a></li>
                                    <li><input type="checkbox"> <a href="#">green (5)</a></li>
                                    <li><input type="checkbox"> <a href="#">blue (2)</a></li>
                                    <li><input type="checkbox"> <a href="#">black (6)</a></li>
                                    <li><input type="checkbox"> <a href="#">Pink (7)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Our Brand</h3>
                            <div class="sidebar-list">
                                <ul>
                                    <li><input type="checkbox"> <a href="#">Nike (8)</a></li>
                                    <li><input type="checkbox"> <a href="#">Religion (2)</a></li>
                                    <li><input type="checkbox"> <a href="#">Diesel (5)</a></li>
                                    <li><input type="checkbox"> <a href="#">Monki (8)</a></li>
                                    <li><input type="checkbox"> <a href="#">iaan (7)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Popular Tags</h3>
                            <div class="tag">
                                <ul>
                                    <li><a href="#">Clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">footwear</a></li>
                                    <li><a href="#">kid</a></li>
                                    <li><a href="#">View All Tags</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <div class="sidebar-img-text">
                                <div class="sidebar-img">
                                    <a href="#">
                                        <img src="assets/img/shop/2.jpg" alt="">
                                    </a>
                                    <div class="sidebar-text">
                                        <h3>save up to </h3>
                                        <h2>40% off</h2>
                                        <h3>cap</h3>
                                        <a href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="blog-wrapper shop-page-mrg">
                        <div class="tab-menu-product">
                            <div class="tab-menu-sort">
                                <div class="tab-menu">
                                    <ul role="tablist">
                                        <li class="active">
                                            <a href="#grid" data-toggle="tab">
                                                <i class="fa fa-th-large"></i> Grid
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#list" data-toggle="tab">
                                                <i class="fa fa-align-justify"></i> List
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-sort">
                                    <label>Sort By : </label>
                                    <select>
                                            <option value="">Position</option>
                                            <option value="">Popularity</option>
                                            <option value="">Price</option>
                                            <option value="">Average rating</option>
                                        </select>
                                </div>
                            </div>
                            <div class="tab-product">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="row">
                                            @foreach($products as $product)
                                            <div class="col-md-6 col-lg-4 col-sm-6">
                                                <div class="single-shop mb-40">
                                                    <div class="shop-img">
                                                        <a href="#"><img src="{{asset('upload/product/'.$product->img_main)}}" alt=""></a>
                                                       @if($product->price_after < $product->price)
                                                         <div class="price-up-down">
                                                           
                                                            <span class="sale-new">sale</span>  

                                                        </div>
                                                        @endif
                                                        <div class="button-group">
                                                            <a href="#" title="Add to Cart" data-toggle="modal" data-target="#quick-view{{$product->id}}">
                                                                <i class="pe-7s-cart"></i>
                                                            </a>
                                                            <a class="wishlist" href="#" title="Wishlist" data-toggle="modal" data-target="#quick-view">
                                                                <!-- <i class="pe-7s-like"></i> -->
                                                            </a>
                                                            <a href="#" data-toggle="modal" data-target="#quick-view{{$product->id}}" title="Quick View{{$product->id}}">
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
                                                                @if( $product->price_after == 0 )
                                                                <span class="new">{{$product->price.' '.$currency->name_en}}</span>
                                                                @elseif($product->price_after < $product->price )
                                                                <span class="new">{{$product->price.' '.$currency->name_en}}</span>
                                                                @else
                                                                <span class="new">{{$product->price.' '.$currency->name_en}}
                                                                @endif
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane mb-10" id="list">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                  @foreach($products as $product)
                                                    
                                                    <div class="single-shop mb-30">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <div class="shop-list-left">
                                                                <div class="shop-img">
                                                                    <a href="#"><img src="{{asset('upload/product/'.$product->img_main)}}" alt=""> </a>
                                                                    <div class="shop-quick-view">
                                                                        <a href="#" data-toggle="modal" data-target="#quick-view{{$product->id}}" title="Quick View{{$product->id}}">
                                                                            <i class="pe-7s-look"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="price-up-down">
                                                                        <span class="sale-new">New</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                                            <div class="shop-list-right">
                                                                <div class="shop-list-all">
                                                                    <div class="shop-list-name">
                                                                        <h3><a href="#">{{$product->name_en}}</a></h3>
                                                                    </div>
                                                                    <div class="shop-list-rating">
                                                                        <span class="ratting">
                                                                                <!-- <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i>
                                                                                <i class="fa fa-star active"></i> -->
                                                                            </span>
                                                                    </div>
                                                                    <p>
                                                                        {{$product->info_en}}
                                                                    </p>
                                                                    <div class="shop-list-price">
                                                                        <span class="list-price">
                                                                 @if( $product->price_after == 0 )
                                                                <span class="new">{{$product->price.' '.$currency->name_en}}</span>
                                                                @elseif($product->price_after < $product->price )
                                                                <span class="new">{{$product->price_after.' '.$currency->name_en}}</span>
                                                                <span class="old">{{$product->price.' '.$currency->name_en}}</span>
                                                               
                                                                @else
                                                                <span class="new">{{$product->price.' '.$currency->name_en}}
                                                                @endif
                                                                        <!-- <span class="old">$110.00</span> -->
                                                                        </span>
                                                                    </div>
                                                                    <div class="shop-list-cart">
                                                                        <div class="shop-group">
                                                                            <a href="#" title="Add to Cart">
                                                                                <i class="pe-7s-cart"></i> add to cart
                                                                            </a>
                                                                            <a class="wishlist" href="#" title="Wishlist">
                                                                                <i class="pe-7s-like"></i> Wishlist
                                                                            </a>
                                                                        </div>
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
                                    <div class="page-pagination text-center">
                                          {{$products->render()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection