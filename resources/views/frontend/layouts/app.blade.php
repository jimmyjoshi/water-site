<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Water Slides')">
        <meta name="author" content="@yield('meta_author', 'Water Slides')">

        {{ Html::style('css/style.css') }}
        {{ Html::style('css/color-blue.css') }}
        {{ Html::style('css/responsive.css') }}
        {{ Html::style('css/font-awesome.css') }}

        {{ Html::style('rs-plugin/css/settings.css') }}
        {{ Html::style('rs-plugin/css/layers.css') }}
        {{ Html::style('rs-plugin/css/navigation.css') }}
        {{ Html::style('css/owl.carousel.css') }}
        {{ Html::style('css/prettyPhoto.css') }}

        <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|Source+Serif+Pro:400,600,700' rel='stylesheet' type='text/css'>

        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        @yield('after-styles')

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="app-layout">
        <div id="app">
            @include('includes.partials.logged-in-as')
            
            @include('includes.partials.messages')

            @include('frontend.layouts.top-bar')

            @include('frontend.layouts.header')

           
                @yield('content')

            @include('frontend.layouts.footer')
            
            
        </div><!-- container -->
    </div><!--#app-->

        <!-- Scripts -->
        @yield('before-scripts')



        <!-- JavaScript -->
        
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/jquery-ui.min.js') !!}
        
        {!! Html::script('rs-plugin/js/jquery.themepunch.tools.min.js?rev=5.0') !!}
        {!! Html::script('rs-plugin/js/jquery.themepunch.revolution.min.js?rev=5.0') !!}
        {!! Html::script('js/owl.carousel.min.js') !!}
        {!! Html::script('js/jquery.prettyPhoto.js') !!}

        {!! Html::script('rs-plugin/js/extensions/revolution.extension.video.min.js') !!}
        {!! Html::script('rs-plugin/js/extensions/revolution.extension.slideanims.min.js') !!}
        {!! Html::script('rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') !!}
        {!! Html::script('rs-plugin/js/extensions/revolution.extension.navigation.min.js') !!}
        
        
        {!! Html::script('js/scripts.js') !!}

        {{-- {!! Html::script(mix('js/frontend.js')) !!} --}}
        @yield('after-scripts')
        <script type="text/javascript" src="{!! asset('js/custom/custom.js') !!}"></script>
      
        @yield('footer-js')

        
    </body>
</html>

