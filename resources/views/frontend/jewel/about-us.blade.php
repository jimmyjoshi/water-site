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
                    
                   
                        <h4>About</h4>
                        <div class="title-block5"></div>

                        {!! access()->getBlock('about-us') !!}

                    
                    <div class="space4"></div>
                </div>
                    
                    <!-- END .qns-one-half -->
                   
                    
                    <!-- BEGIN .qns-one-half -->
                    <div class="main-content-full">
                        
                        <h4>Our Team</h4>
                        <div class="title-block5"></div>
                        
                        <div>
                            <div class="qns-one-half">
                                <center>
                                    <h1>PRANAY SAFARI</h1>
                                    <p>
                                        <img src="{!! URL::to('/').'/uploads/team/pranay.jpg' !!}"  width="400" height="450">
                                    </p>
                                    <h1>FOUNDER</h1>
                                </center>
                                <p>
                                    This is Lorem Ipsum This is Lorem Ipsum This is Lorem Ipsum This is Lorem Ipsum 
                                </p>
                            </div>
                            <div class="qns-one-half qns-last">
                                <center>
                                    <h1>KUNAL GAUTAM</h1>
                                    <p>
                                       <img src="{!! URL::to('/').'/uploads/team/kunal.jpeg' !!}" width="400" height="450">
                                    </p>
                                    <h1>HEAD-SALES & MARKETING</h1>
                                </center>
                                <p>
                                    This is Lorem Ipsum This is Lorem Ipsum This is Lorem Ipsum This is Lorem Ipsum 
                                </p>
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