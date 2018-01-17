@extends('frontend.layouts.app')

@section('content')
<div id="page-header">
    <h1>Admin Login</h1>
    <div class="title-block3"></div>
    <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>Admin Login</p>
</div>

<!-- BEGIN .content-wrapper -->
<div class="content-wrapper clearfix">
    
    <!-- BEGIN .main-content -->
    <section class="main-content main-content-full">
        
        <div class="qns-one-half">
            
            <h4>Admin Login</h4>
            <h4>Contact Details</h4>
            <div class="title-block5"></div>
            <div class="widget not-widget">
                <ul class="contact-details-widget">
                    <li class="cdw-address clearfix">1 Roadtown Street, British Virgin Islands</li>
                    <li class="cdw-time clearfix">Mon - Sat 9.00 - 18.30. Sunday Closed</li>
                    <li class="cdw-phone clearfix">1800-1111-2222</li>
                    <li class="cdw-email clearfix">booking@example.com</li>
                </ul>
            </div>
            
            <h4>Social Media</h4>
            <div class="title-block5"></div>
            
            <ul class="social-links clearfix">
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
            
        </div>
    
        <div class="qns-one-half qns-last">
            
            <!-- BEGIN .contact-form-1 -->
            <form action="{!! route('frontend.water-login-check') !!}" class="contact-form-1" method="GET">

                <label>User Name <span>*</span></label>
                <input type="text"  name="username" value="" required="required" />
        
                <label>Password <span>*</span></label>
                <input type="password" name="password" value="" required="required" />
            
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