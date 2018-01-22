@extends('frontend.layouts.app')

@section('content')
<div id="page-header">
            <h1>About Us</h1>
            <div class="title-block3"></div>
            <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>About Us</p>
        </div>
        
        <!-- BEGIN .content-wrapper -->
        <div class="content-wrapper clearfix">
            
            <!-- BEGIN .main-content -->
            <section class="main-content main-content-full">
                
                <!-- BEGIN .clearfix -->
                <div class="clearfix">
                    
                    <!-- BEGIN .qns-one-half -->
                    <div class="qns-one-half">
                        
                        <h4>About</h4>
                        <div class="title-block5"></div>

                        {!! access()->getBlock('about-us') !!}

                    
                    <div class="space4"></div>
                    
                    <!-- END .qns-one-half -->
                    </div>
                    
                    <!-- BEGIN .qns-one-half -->
                    <div class="qns-one-half qns-last">
                        
                        <h4>Our Team</h4>
                        <div class="title-block5"></div>
                        
                        <div id="tabs" class="tabs-no-margin">

                            <ul class="nav clearfix">
                                <li><a href="#tabs-tab-title-1">PRANAY SAFARI</a></li>
                                <li><a href="#tabs-tab-title-2">KUNAL GAUTAM</a></li>
                            </ul>

                            <div id="tabs-tab-title-1">
                                <center>
                                    <h1>PRANAY SAFARI</h1>
                                    <p>
                                        <img src="{!! URL::to('/').'/uploads/team/pranay.jpg' !!}">
                                    </p>
                                    <h1>FOUNDER</h1>
                                </center>
                            </div>

                            <div id="tabs-tab-title-2">
                                <center>
                                    <h1>KUNAL GAUTAM</h1>
                                    <p>
                                       <img src="{!! URL::to('/').'/uploads/team/kunal.jpg' !!}">
                                    </p>
                                    <h1>HEAD-SALES & MARKETING</h1>
                                </center>
                            </div>

                        </div>
                        
                    <!-- END .qns-one-half -->
                    </div>
                
                <!-- END .clearfix -->  
                </div>
            <!-- END .main-content -->
            </section>
            
        <!-- END .content-wrapper -->
        </div>
@endsection