@extends('frontend.layouts.app')

@section('content')
<div id="page-header">
            <h1>Service > Installations</h1>
            <div class="title-block3"></div>
            <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>Service > installations</p>
        </div>
        
        <!-- BEGIN .content-wrapper -->
        <div class="content-wrapper clearfix">
            
            <!-- BEGIN .main-content -->
            <section class="main-content main-content-full">
                {!! access()->getBlock('installations') !!}        
            </section>
        </div>
@endsection