<html>
    <head>
        <!-- Bootstrap core CSS -->
        {{ HTML::style( asset('assets/bootstrap/dist/css/bootstrap.css') ) }}
        {{ HTML::style( asset('assets/bootstrap/dist/css/carousel.css') ) }}
        {{ HTML::style( asset('assets/css/main.css') ) }}
        {{ HTML::style( asset('assets/bootstrap/dist/css/bootstrap-image-gallery.min.css') ) }}
        <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        {{ HTML::script(asset('assets/bootstrap/dist/js/bootstrap.js')) }}
        {{ HTML::script(asset('assets/bootstrap/dist/js/jquery.js')) }}
        {{ HTML::script(asset('assets/bootstrap/dist/js/bootstrap.min.js')) }}
        {{ HTML::script(asset('assets/bootstrap/docs-assets/js/holder.js')) }}
        {{ HTML::script(asset('assets/js/jquery-ui-1.10.4.custom.js')) }}
        <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        {{ HTML::script(asset('assets/bootstrap/dist/js/bootstrap-image-gallery.min.js')) }}
        {{ HTML::script(asset('assets/lite-uploader-master/jquery.liteuploader.js')) }}
    </head>
    <body>
        @include('frontend.sidebar')
        @yield('content')
        @include('frontend.footer')
    </body>
</html>