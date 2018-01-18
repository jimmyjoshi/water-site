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

                        <p>
                            APAC Integrated  began as a waterpark operator in 2012 and has maintained a focus on the guest experience and achieving operational success with everything we do.
                            Serving our clients and being their partner in success is our top priority. We’ve established an organization with the depth and breadth to be just that. From master planning to installation, we’ve created a team of dedicated experts to ensure our name is synonymous with excellence.
                        </p>


                        <h5><strong>With You</strong></h5>
                        <p>
                            Our people are the driving force behind what makes APAC Integrated the market leader. Decades of combined experience as park operators, designers, suppliers, and guests has primed us to effectively deliver our clients’ visions into vibrant realities.
                            Your business objectives are at the core of our creative process as we work with you to develop a profitable solution to help you serve your customers as best you can.
                        </p>

                        <h5><strong>Our Culture</strong></h5>
                        <p>
                            We’ve built an inspiring team at APAC Integrated so we are able to attract and hire the best of our industry. Our team of over 150 enthusiastic professionals show up every day with a passion for their work, making what APAC Integrated does possible
                        </p>

                        <h5><strong>Safety Standards</strong></h5>
                        <p>
                            Safety is non-negotiable at APAC Integrated. Each design is evaluated using carefully calibrated simulations followed by meticulous testing and fine-tuning to get the ride experience optimal and safety-assured.
                        </p>
                    
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