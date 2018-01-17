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
                        
                        <h4>Our Company</h4>
                        <div class="title-block5"></div>
                        <p>Duis commodo ipsum quis ante venenatis rhoncus. Vivamus imperdiet felis ac facilisis hendrerit. Nulla eu elementum ex, ut pulvinar est. Nam aliquet et tortor sed aliquet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sit amet aliquet leo. Sed aliquam ex id turpis mattis, sit amet porta augue laoreet. Duis euismod feugiat consectetur.</p>

                        <p>Maecenas sodales maximus mi sed placerat. Cras nec velit blandit, porta risus a, accumsan tellus. In hac habitasse platea dictumst. Curabitur mollis nisl sit amet pellentesque congue. Sed feugiat elit et nunc tempor eleifend. Sed ac porttitor ligula, nec efficitur justo. Nam sit amet sagittis diam, id maximus nibh. Proin consequat, nibh ut semper rhoncus, lacus tortor laoreet ante.</p>
                    
                    <div class="space4"></div>
                    
                    <!-- END .qns-one-half -->
                    </div>
                    
                    <!-- BEGIN .qns-one-half -->
                    <div class="qns-one-half qns-last">
                        
                        <!-- BEGIN .photo-gallery-wrapper -->
                        <div class="photo-gallery-wrapper photo-gallery-2-col clearfix">

                            <div class="photo-gallery-item"><a href="images/image11.jpg" data-gal="prettyPhoto[gallery]"><img src="images/image11.jpg" alt="" /></a></div>
                            <div class="photo-gallery-item"><a href="images/image11.jpg" data-gal="prettyPhoto[gallery]"><img src="images/image11.jpg" alt="" /></a></div>
                            <div class="photo-gallery-item"><a href="images/image11.jpg" data-gal="prettyPhoto[gallery]"><img src="images/image11.jpg" alt="" /></a></div>
                            <div class="photo-gallery-item"><a href="images/image11.jpg" data-gal="prettyPhoto[gallery]"><img src="images/image11.jpg" alt="" /></a></div>

                        <!-- END .photo-gallery-wrapper -->
                        </div>
                        
                        <div class="space4"></div>
                        
                    <!-- END .qns-one-half -->
                    </div>
                
                <!-- END .clearfix -->  
                </div>
                
                <!-- BEGIN .clearfix -->
                <div class="clearfix">
                    
                    <!-- BEGIN .qns-one-half -->
                    <div class="qns-one-half">
                        
                        <h4>Video Tour</h4>
                        <div class="title-block5"></div>
                        
                        <div class="video-wrapper video-wrapper-page">
                            <div class="video-play">
                                <a href="https://www.youtube.com/watch?v=4uObRcSDyLc" data-gal="prettyPhoto"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        
                    <!-- END .qns-one-half -->  
                    </div>
                    
                    <!-- BEGIN .qns-one-half -->
                    <div class="qns-one-half qns-last">
                        
                        <h4>About Our Yachts</h4>
                        <div class="title-block5"></div>
                        
                        <div id="tabs" class="tabs-no-margin">

                            <ul class="nav clearfix">
                                <li><a href="#tabs-tab-title-1">Luxury</a></li>
                                <li><a href="#tabs-tab-title-2">Technology</a></li>
                                <li><a href="#tabs-tab-title-3">Safety</a></li>
                            </ul>

                            <div id="tabs-tab-title-1"><p>Lorem ips dolor amet consec adipisci pellentesque mollis hend accumsan in euismod tortor posuere nisi donec malesuada feugiat dapibus. Nunc congue praesent ac fringilla neque aliquam euismod sem est pellentes lorem dignissim in duis in convallis nulla elit sit at. Pellentesque pellentesque risus vitae tortor laoreet tincidunt.</p>

                            <p>Placerat velit, ultricies pharetra ante. Fusce aliquam velit sed magna Consectetur, at scelerisque elit lobortis. Sed lacus est, dictum eget auctor sit amet, gravida in ipsum. Mauris eget nibh lorem. In imperdiet nec ligula vel vulputate. Nam convallis, urna id lobortis facilisis.</p></div>

                            <div id="tabs-tab-title-2"><p>In hac habitasse platea dictumst. Morbi eleifend ante mauris, nec tempus magna posuere id. Suspendisse leo risus, vestibulum sed urna nec, iaculis laoreet ex. In convallis eros quam, eu luctus mauris aliquam eu. Nulla id mollis elit. Pellentesque ut libero consectetur arcu lacinia dictum. Pellentesque tristique purus tortor, at rhoncus nisl molestie ut.</p>

                            <p>Pellentesque pellentesque risus vitae tortor laoreet tincidunt. Donec nec aliquam massa. Pellentesque vulputate id est non condimentum. Duis sed dictum mauris, id lacinia velit. Quisque id tincidunt massa, id commodo augue. Curabitur cursus quam at nunc luctus convallis.</p></div>

                            <div id="tabs-tab-title-3"><p>Ut tempus ultricies velit, vitae luctus purus bibendum in. Proin pharetra sodales mauris at fringilla. Vestibulum fringilla tellus vel euismod auctor. Donec tincidunt mollis vulputate. Sed dignissim egestas lectus, et hendrerit sapien. Aenean sodales magna sapien, in feugiat eros viverra at. Sed vel metus at velit porta finibus nec ac arcu.</p>

                            <p>Aliquam pretium elit quis erat tempor consectetur. Aenean id tellus ultrices, dignissim tortor ac, consectetur augue. Morbi ullamcorper tristique nisi, eget ultrices leo tristique hendrerit. Interdum et malesuada fames ac ante ipsum primis in faucibus donec pellentesque.</p></div>

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