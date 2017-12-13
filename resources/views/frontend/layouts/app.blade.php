<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Super Gems')">
        <meta name="author" content="@yield('meta_author', 'WVE Labs')">

        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/font-awesome.min.css') }}
        {{ Html::style('css/slick-theme.css') }}
        {{ Html::style('css/sliderstyle.css') }}


        {{ Html::style('css/style.css') }}
        {{ Html::style('css/responsive.css') }}

        
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
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
            

            <div class="container-fluid1">
                @include('includes.partials.messages')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

                @yield('content')
            </div><!-- container -->
        </div><!--#app-->

        <!-- Scripts -->
        @yield('before-scripts')


        {!! Html::script(mix('js/frontend.js')) !!}
        @yield('after-scripts')
        <script type="text/javascript" src="{!! asset('js/custom/custom.js') !!}"></script>
      
        @yield('footer-js')

        
    </body>
</html>