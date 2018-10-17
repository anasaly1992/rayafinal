@extends('layouts.FrontLayout.master')
@section('content')
@foreach($pages as $page)
<!-- breadcrumbs start -->
    <div class="breadcrumbs-area breadcrumb-bg ptb-100">
        <div class="container">
            <div class="breadcrumbs text-center">
                <h2 class="breadcrumb-title">{{$page->name_en}}</h2>
                <ul>
                    <li>
                        <a class="active" href="{{route('home')}}">Home</a>
                    </li>
                    <li>{{$page->name_en}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                {!!$page->details_en!!}
            </div>
        </div>
    </div>
    @endforeach
@endsection