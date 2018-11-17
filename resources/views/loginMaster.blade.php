<!DOCTYPE html>
<html>
    <head>
                <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/assets/images/fav_icon.png')}}">
        <!-- App title -->
        <title>Ubiq</title>

        <!-- App css -->
        <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('public/assets/js/modernizr.min.js')}}"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            @yield('main_content')
        </section>
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/assets/js/detect.js')}}"></script>
        <script src="{{asset('public/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('public/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('public/assets/js/waves.js')}}"></script>
        <script src="{{asset('public/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('public/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('public/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('public/assets/js/jquery.app.js')}}"></script>

    </body>
</html>