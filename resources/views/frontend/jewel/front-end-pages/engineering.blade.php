@extends('frontend.layouts.app')

@section('content')
<div id="page-header">
            <h1>Service > Engineering</h1>
            <div class="title-block3"></div>
            <p><a href="{!! route('frontend.index') !!}">Home</a><i class="fa fa-angle-right"></i>Service > Engineering</p>
        </div>
        
        <!-- BEGIN .content-wrapper -->
        <div class="content-wrapper clearfix">
            
            <!-- BEGIN .main-content -->
            <section class="main-content main-content-full">
                {!! access()->getBlock('engineering') !!}        
            </section>
        </div>
@endsection