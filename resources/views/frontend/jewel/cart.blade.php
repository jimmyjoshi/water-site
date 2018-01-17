@extends('frontend.layouts.app')

@section('content')
<div id="page-header">
    <h1>My Cart</h1>
    <div class="title-block3"></div>
    <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>My Cart</p>
</div>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper clearfix">
    
  
        <div class="row form-block">
            <div class="col-lg-12">
                <div class="cart-info-table">
                <div class="table-responsive"> 
                    <table class="table table-striped"> 
                        <thead> 
                            <tr> 
                                <th>Product Description</th>
                                <th>Action</th> 
                                <th>Quantity</th> 
                                <th>Unit Price</th> 
                                <th>Total Price</th> 
                            </tr> 
                        </thead> 
                            <tbody> 
                                <?php $total = 0 ;?>
                                @foreach($user->cart as $cart)
                                    <tr id="cartPId-{{ $cart->product->id }}"> 
                                        <td>
                                            <span>
                                                {{ Html::image('uploads/product/'.$cart->product->image, $cart->product->title, ['width' => 150, 'height' => 150]) }}
                                            
                                            </span>
                                            <p>
                                                <h3>{{ $cart->product->title }}</h3>
                                                {{ $cart->product->description }}</p>
                                        </td>  
                                        <td>
                                            <div class="edit">
                                                <a href="javascript:void(0);" class="remove-product" data-id="{{ $cart->product->id }} ">
                                                    {{ Html::image('images/remove-btn.png', 'remove', ['data-id' => $cart->product->id]) }}Remove
                                                </a>
                                            </div>
                                            <div class="edit">
                                                <a href="javascript:void(0);" class="update-cart" data-id="{{ $cart->product->id }} ">
                                                    {{ Html::image('images/edit-btn.png', 'edit', ['data-id' => $cart->product->id]) }}
                                                    Edit
                                                </a>
                                            </div>
                                        </td> 
                                        <td>
                                        <select class="small_select" id="productQty-{{ $cart->product->id }}">

                                          <option {{ ($cart->qty == 1) ? 'selected="selected"' : '' }} value="1">1</option>
                                          <option {{ ($cart->qty == 2) ? 'selected="selected"' : '' }} value="2">2</option>
                                          <option {{ ($cart->qty == 3) ? 'selected="selected"' : '' }} value="3">3</option>
                                          <option {{ ($cart->qty == 4) ? 'selected="selected"' : '' }} value="4">4</option>
                                        </select>
                                        </td> 
                                        <td><div class="price">{{ $cart->product->price }}</div></td> 
                                        <td><div class="price" style="text-align: right;">{{number_format($cart->product->price *  $cart->qty, 2) }}</div></td> 
                                        <?php
                                            $total = $total + $cart->product->price *  $cart->qty;
                                        ?>
                                    </tr>
                                @endforeach
                            </tbody> 
                        </table> </div>
            </div>
            </div>
            <div class="col-lg-12">
                <div class="total-amount-box">

                <label>Name <span>*</span></label>
                <input type="text"  name="name" id="name" value="" required="required"  placeholder="Name"/>
        
                <label>Contact Number <span>*</span></label>
                <input type="text" name="contact_number" id="contact_number" value="" required="required" placeholder="Contact Number" />
                
                <label>Email Id <span>*</span></label>
                <input type="text" name="email_id" id="email_id" value="" required="required" placeholder="Email ID" />

                <h2 style="text-align: right;">Total Amount <span> <?php echo number_format($total);?></span></h2></div>
                @if(count($user->cart))
                    <div class="text-right">
                        <a href="javascript:void(0);" id="createOrderBtn" class="top-right-button"> Place an Order </a>
                    </div>
                @endif
            </div>
            
        
    </div>
    
<!-- END .content-wrapper -->
</div>
@endsection


@section('footer-js')
<script type="text/javascript">

jQuery(document).on('click', '.remove-product', function(element)
    {   
        var productId = element.target.getAttribute('data-id');

        jQuery.ajax(
        {
            url: "{!! route('frontend.remove-product-from-cart') !!}",
            method: "GET",
            dataType: 'json',
            data: {
                'productId': productId
            },
            success: function(data)
            {
                if(data.status == true)
                {
                    alert("Product Removed From Cart Successfully!");
                    jQuery("#cartPId-"+productId).html('');
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


jQuery("#createOrderBtn").on('click', function()
{
    var name    = document.getElementById("name").value,
        emailId = document.getElementById("email_id").value,
        mobile  = document.getElementById("contact_number").value;
    
    if(name.length > 2 && emailId.length > 2 && mobile.length > 2)
    {
        jQuery.ajax(
        {
            url: "{!! route('frontend.user.create-order') !!}",
            method: "GET",
            dataType: 'json',   
            data: {
                name:       name,
                emailId:    emailId,
                mobile:     mobile
            },
            success: function(data)
            {
                if(data.status == true)
                {
                    alert("Order Created Successfully !");
                    window.location.reload();
                    return true;
                }

                alert("Somethin went Wront !");
                return false;
            },
            error: function(data)
            {
                console.log(data);
                return ;
            }
        });
    }
    else
    {
        alert("Please Provide Valid Name Email Id and Contact Number to Submit Order !");
    }
})

jQuery(document).on('click', '.update-cart', function(element)
    {   
        var productId   = element.target.getAttribute('data-id'),
            productQty  = jQuery("#productQty-"+productId ).val();

        jQuery.ajax(
        {
            url: "{!! route('frontend.water-add-to-cart') !!}",
            method: "GET",
            dataType: 'json',
            data: {
                productId:  productId,
                productQty: productQty
            },
            success: function(data)
            {
                if(data.status == true)
                {
                    alert("Product Quantity Updated Successfully!");
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