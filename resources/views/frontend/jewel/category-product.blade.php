@extends('frontend.layouts.app')

@section('content')

<div id="page-header">
    <h1>Category - {{ $category->title }}</h1>
    <div class="title-block3"></div>
    <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>Category - {{ $category->title }}</p>
</div>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper clearfix">
    
    <!-- BEGIN .main-content -->
    <section class="main-content main-content-full">
        
        <!-- BEGIN .yacht-listing-wrapper-3 -->
        <div class="yacht-listing-wrapper-3 clearfix">
            @foreach($products as $product)
                
                <!-- BEGIN .yacht-block -->
                <div class="yacht-block">
                    <div class="yacht-block-image">
                        <div class="new-icon">New</div>
                        <a href="{{ route('frontend.jewel-products-details', ['id' => $product->id]) }}">
                            <img width="350" height="250" src="{{ URL::to('/').'/uploads/product/'.$product->image}}" alt="{{ $product->title }}">
                        </a>
                    </div>
                    <div class="yacht-block-content">
                        <h3>
                            <a href="{{ route('frontend.jewel-products-details', ['id' => $product->id]) }}">
                                {{ $product->title }}
                            </a>
                        </h3>
                        <div class="title-block5"></div>
                        <span>{{ $product->description }}</span>
                        {{-- <a href="yacht-charter-single.html" class="yacht-charter-book-button">Book Now</a> --}}
                    </div>
                <!-- END .yacht-block -->
                </div>
            @endforeach
           

           
        <!-- END .yacht-listing-wrapper-3 -->
        </div>
        
    <!-- END .main-content -->
    </section>

<!-- END .content-wrapper -->
</div>
{{-- <body class="inner-bg">

<main role="main" id="main-container">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-12">
                <div class="stack">
                    @foreach($products as $product)
                        <div class="boxes">
                            <a href="{{ route('frontend.jewel-products-details', ['id' => $product->id]) }}">
                                <img src="{{ URL::to('/').'/uploads/product/'.$product->image}}" alt="">
                                <span>{{ $product->title }}</span>
                            </a>
                            <div class="slider"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
 --}}
@endsection