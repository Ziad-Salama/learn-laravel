<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/lightbox.css')}}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    @include('includes.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Preloader End ***** -->

    @yield('content')

    <!-- ***** Footer Start ***** -->
    @include('includes.footer')


    <!-- jQuery -->
    <script src="{{URL::asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="URL::asset('assets/js/popper.js')"></script>
    <script src="URL::asset('assets/js/bootstrap.min.js')"></script>

    <!-- Plugins -->
    <script src="{{URL::asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{URL::asset('assets/js/accordions.js')}}"></script>
    <script src="{{URL::asset('assets/js/datepicker.js')}}"></script>
    <script src="{{URL::asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/imgfix.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/slick.js')}}"></script>
    <script src="{{URL::asset('assets/js/lightbox.js')}}"></script>
    <script src="{{URL::asset('assets/js/isotope.js')}}"></script>

    <!-- Global Init -->
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);

            });
        });

    </script>

  </body>
</html>
