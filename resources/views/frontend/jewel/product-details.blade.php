@extends('frontend.layouts.app')

@section('content')
<div id="page-header">
    <h1>{!! $product->category->title !!}</h1>
    <div class="title-block3"></div>
    <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>{!! $product->title !!}</p>
</div>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper clearfix">
    
    <!-- BEGIN .main-content -->
    <section class="main-content">
        
        <!-- BEGIN .rev_slider_wrapper2 -->
        <div class="rev_slider_wrapper2">   
            <!-- BEGIN #slider1 -->
            <div id="slider2" class="rev_slider" data-version="5.0">
                <ul>
                    @if(isset($product->image))
                        <!-- BEGIN .Slide 1 -->
                        <li data-transition="fade">
                            <img src="{{ URL::to('/').'/uploads/product/'.$product->image}}"  alt="{{ $product->title }}"  width="710" height="440">
                            <div class="tp-caption rev-custom-caption-1"
                                data-x="center"
                                data-y="center"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="o:0"
                                data-transform_out="o:0"
                                data-start="500">
                            </div>
                        <!-- END .Slide 1 -->
                        </li>
                    @endif

                    @if(isset($product->image1))
                        <!-- BEGIN .Slide 1 -->
                        <li data-transition="fade">
                            <img src="{{ URL::to('/').'/uploads/product/'.$product->image1}}"  alt="{{ $product->title }}" width="710" height="440">
                            <div class="tp-caption rev-custom-caption-2"
                                data-x="left"
                                data-y="center"
                                data-whitespace="normal"
                                data-transform_idle="o:1;"
                                data-transform_in="o:0"
                                data-transform_out="o:0"
                                data-start="500">
                            </div>
                        <!-- END .Slide 1 -->
                        </li>
                    @endif

                </ul>

            <!-- END #slider1 -->
            </div>

        <!-- END .rev_slider_wrapper2 -->
        </div>
        
        <div id="tabs" class="tabs-no-margin">
            <ul class="nav clearfix">
                <li><a href="#tabs-tab-title-1">Details</a></li>
                <li><a href="#tabs-tab-title-2">3D Image</a></li>
                <li><a href="#tabs-tab-title-3">Video</a></li>
            </ul>

                <div id="tabs-tab-title-1">
                    <p> Title : {{ $product->title }}</p>
                    <p>Description : {{$product->description}}</p>
                    <p>Additional Information : {{ $product->additional_details }}</p>
                </div>

                <div id="tabs-tab-title-2">
                    <p>
                        @if(isset($product->hd_image))
                            <img src="{{ URL::to('/').'/uploads/product/'.$product->hd_image}}"  alt="{{ $product->title }}" width="710" height="440">
                        @endif
                    </p>
                </div>
                <div id="tabs-tab-title-3">
                    <p>
                        {{ $product->video_url }}
                    </p>
                </div>
            </div>
        
    <!-- END .main-content -->
    </section>
    
    <!-- BEGIN .sidebar-content -->
    <section class="sidebar-content">
        
        <!-- BEGIN .widget -->
        <div class="widget">
            
            <h3>Inquire About - {{ $product->title }}</h3>
            <div class="title-block5"></div>
            
            <!-- BEGIN .yacht-charter-sale-form -->
            <div class="yacht-charter-sale-form">

                <form action="{!! route('frontend.water-buy-single-product') !!}" method="GET">
                    <label>Quantity:</label>
                    <div class="select-wrapper">
                        <i class="fa fa-angle-down"></i>
                        <select name="product_qty">
                            <option selected="selected" value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>

                    <label>Name</label>
                    <div class="input-wrapper">
                        <input type="text" name="name" required="required">
                    </div>
                    
                    <label>Contact Number / Skype ID</label>
                    <div class="input-wrapper">
                        <input type="text" name="contact_number"  required="required">
                    </div>

                    <label>Email Id</label>
                    <div class="input-wrapper">
                        <input type="text" name="email_id"  required="required">
                    </div>

                    @if(count(access()->user()->cart->where('product_id', $product->id)) == 0 )
                         <button type="button" class="btn btn-custom add-product-to-cart" data-id="{{ $product->id }}">
                            Add to Cart
                        </button>
                    @endif

                    <div class="col col-auto">
                        <input type="hidden" name="product_id" value="{!!  $product->id !!}">
                        <button type="submit">Create Inquiry</button>
                    </div>
                

                </form>

            <!-- END .yacht-charter-sale-form -->
            </div>
        
        <!-- END .widget -->
        </div>
        
        <!-- BEGIN .widget -->
        <div class="widget">
            
            <h3>Contact Us</h3>
            <div class="title-block5"></div>
            
            <ul class="contact-details-widget">
                <li class="cdw-address clearfix">
                    11-B VATSA HOUSE, JANMA BHOOMI MARG, MUMBAI 400001, INDIA
                </li>
                <li class="cdw-time clearfix">Mon - Sat 9.00 - 18.30. Sunday Closed</li>
                <li class="cdw-phone clearfix">+91 9923 599 203</li>
                <li class="cdw-email clearfix">kunal@apacintegrated.com</li>
            </ul>
            
        <!-- END .widget -->
        </div>
        
    <!-- END .sidebar-content -->
    </section>

<!-- END .content-wrapper -->
</div>
@endsection

@section('footer-js')

<script type="text/javascript">

    jQuery(document).on('click', '.add-product-to-cart', function(element)
    {   
        var productId = element.target.getAttribute('data-id');

        jQuery.ajax(
        {
            url: "{!! route('frontend.water-add-to-cart') !!}",

            method: "GET",
            dataType: 'json',
            data: {
                'productId': productId
            },
            success: function(data)
            {
                if(data.status == true)
                {
                    alert("Product Added to Cart Successfully!");
                    return true;
                }

                alert("Somethin went Wront !");
                return false;
            },
            error: function(data)
            {
                console.log(data);
            }
        });
    });

</script>

@endsection