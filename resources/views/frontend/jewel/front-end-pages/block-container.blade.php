@extends('frontend.layouts.app')

@section('content')

<div id="page-header">
            <h1>Service > {{ $block->title }}</h1>
            <div class="title-block3"></div>
            <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>Service > {{ $block->title }}</p>
        </div>
        
        <!-- BEGIN .content-wrapper -->
        <div class="content-wrapper clearfix">
            
            <!-- BEGIN .main-content -->
            <section class="main-content main-content-full">
                
                <!-- BEGIN .clearfix -->
                <div class="clearfix">
                    
                    
                    {!! $block->block !!}        

                <!-- END .clearfix -->  
                </div>
            <!-- END .main-content -->
            </section>
            
        <!-- END .content-wrapper -->
        </div>
@endsection