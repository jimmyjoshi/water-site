@extends('frontend.layouts.app')

@section('content')
<div id="page-header">
    <h1>Contact Us</h1>
    <div class="title-block3"></div>
    <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>Contact Us</p>
</div>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper clearfix">
    
    <!-- BEGIN .main-content -->
    <section class="main-content main-content-full">
        
        <div class="qns-one-half">
            
            {!! access()->getBlock('contact-us') !!}
            
        </div>
    
        <div class="qns-one-half qns-last">
            
            <!-- BEGIN .contact-form-1 -->
            <form action="#" class="contact-form-1" method="post">

                <label>Name <span>*</span></label>
                <input type="text" name="accommodation-keywords" value="" />
        
                <label>Email <span>*</span></label>
                <input type="text" name="accommodation-keywords" value="" />
            
                <label>Subject</label>
                <input type="text" name="accommodation-keywords" value="" />
            
                <label>Message <span>*</span></label>
                <textarea cols="10" rows="18"></textarea>   

                <button type="submit">
                    Submit <i class="fa fa-angle-right"></i>
                </button>

            <!-- END .contact-form-1 -->
            </form>
            
        </div>
        
    <!-- END .main-content -->
    </section>
    
<!-- END .content-wrapper -->
</div>
@endsection