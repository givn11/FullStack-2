<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{asset('shop')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('shop')}}/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{asset('shop')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mihstore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <!--//slider-script-->
    <script>$(document).ready(function(c) {
            $('.alert-close').on('click', function(c){
                $('.message').fadeOut('slow', function(c){
                    $('.message').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close1').on('click', function(c){
                $('.message1').fadeOut('slow', function(c){
                    $('.message1').remove();
                });
            });
        });
    </script>
    <script>$(document).ready(function(c) {
            $('.alert-close2').on('click', function(c){
                $('.message2').fadeOut('slow', function(c){
                    $('.message2').remove();
                });
            });
        });
    </script>
    <script type="text/javascript" src="{{asset('shop')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('shop')}}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start menu -->
    <link href="{{asset('shop')}}/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{asset('shop')}}/js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

</head>
<body>
<!--header-->
<div class="container">
    @include('shop.includes.header')

    <div class="content">

        @yield('content')

        @include('shop.includes.sidebar')
        <div class="clearfix"> </div>
    </div>
    <!---->
    @include('shop.includes.footer')
</div>
</div>
<!---->
</body>
</html>