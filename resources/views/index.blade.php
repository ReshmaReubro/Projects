<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/png" href="favicon.png" />
  
  
  <title>{{$page_title}} | {{$site_name}}</title>
  <meta name="description" content="{{$page_description}}" />

  <!-- css files -->
  <link href="{{URL::asset('css/fullpage.css')}}" rel="stylesheet"> 
  <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/plugins-css.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('revolution/css/settings.css')}}" media="screen" />

  <!-- Shortcodes -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/shortcodes/combined.css')}}" />

  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />

  <link rel="stylesheet" href="{{URL::asset('css/toastr.css')}}" />


  <link rel="stylesheet" href="{{URL::asset('css/slick.css')}}" />
  <link rel="stylesheet" href="{{URL::asset('css/slick-theme.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom.css')}}" /> 

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/skins/skin-gray.css')}}" /> 

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
</head>
<body class="st-container st-effect-1">

  @include('layouts.preloader')
  @include('layouts.sidepanel')

  <div class="st-pusher">

    @include('layouts.header')

    <div id="fullpage">

      @include('layouts.home')

      @include('layouts.about-us')

      @include('layouts.our-services')

      @include('layouts.our-clients')

      @include('layouts.contact-us')


    </div>

    <!-- js files -->

    <style>
    /* style the elements with CSS */
    #pleaserotate-graphic{
        fill: #fff;
    }

    #pleaserotate-backdrop {
        color: #fff;
        background-color: #000;
    }
.slimScrollBar{
display:none !important;
}

.isotope {
  -webkit-transition: all 1s ease-in-out !important;
  -moz-transition: all 1s ease-in-out !important;
  -o-transition: all 1s ease-in-out !important;
  transition: all 1s ease-in-out !important;
}
</style>
{{--

<script>
    
    PleaseRotateOptions = {
        forcePortrait: true,
        allowClickBypass: false,
        subMessage: "",
        onlyMobile: true
    };
</script>
<script src="{{URL::asset('js/pleaserotate.js')}}"></script>
--}}



    <script type="text/javascript" src="{{URL::asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="js/plugins-jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{URL::asset('js/slimscroll.min.js')}}"></script>
    <script type="text/javascript" src="js/vendors/scrolloverflow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="{{URL::asset('js/slick.js')}}"></script>
    <script>
      $(document).ready(function(){ 
        var p = $('#horizontal-nav');
        var c;
        $(document).on('mousemove',function() {        
          p.fadeIn('medium');
          clearTimeout(c);
          c= setTimeout(function(){
            p.fadeOut('medium');
          }, 1000);
        });
      });
    </script>

    <!-- plugin_path -->
    <script type="text/javascript">
      var plugin_path = "<?php echo URL::asset('js'); ?>/"
    </script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{URL::asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- revolution custom --> 
    <script type="text/javascript" src="revolution/js/revolution-custom.js"></script> 

    <!-- custom -->
    <script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
    <script>
      $(document).ready(function(){
        $('.slick-client-slider').slick({
          arrows: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          rows:2,
          prevArrow:"<img class='a-left control-c prev slick-prev' src='{{URL::asset('images/slick/prev.png')}}' style='min-height:150px; min-width:80px; z-index:999999999999999!important;'>",
          nextArrow:"<img class='a-right control-c next slick-next' src='{{URL::asset('images/slick/next.png')}}' style='min-height:150px; min-width:80px; z-index:999999999999999!important;'>",
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,

          responsive: [

          {
            breakpoint: 1440,
            settings: {
              arrows: true,
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              prevArrow:"<img class='a-left control-c prev slick-prev' src='{{URL::asset('images/slick/prev.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",
              nextArrow:"<img class='a-right control-c next slick-next' src='{{URL::asset('images/slick/next.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",

            }
          },

          {
            breakpoint: 1024,
            settings: {
              arrows: true,
              slidesToShow: 3,
              slidesToScroll: 2,
              infinite: true,
              prevArrow:"<img class='a-left control-c prev slick-prev' src='{{URL::asset('images/slick/prev.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",
              nextArrow:"<img class='a-right control-c next slick-next' src='{{URL::asset('images/slick/next.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",

            }
          },
          {
            breakpoint: 600,
            settings: {
              arrows: true,
              rows:3,
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              prevArrow:"<img class='a-left control-c prev slick-prev' src='{{URL::asset('images/slick/prev.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",
              nextArrow:"<img class='a-right control-c next slick-next' src='{{URL::asset('images/slick/next.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: true,
              rows:3,
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
              prevArrow:"<img class='a-left control-c prev slick-prev' src='{{URL::asset('images/slick/prev.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",
              nextArrow:"<img class='a-right control-c next slick-next' src='{{URL::asset('images/slick/next.png')}}' style='min-height:80px; min-width:43px; z-index:999999999999999!important;'>",
            }
          }
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
      });

    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer> </script>
    <script src="{{URL::asset('js/toastr.js')}}"></script>
    @include('layouts.notification')

  <script>

    
  if($(window).width()>992){

    if($(window).width()==1024 && $(window).height()==1366){

      $('.rectangular-portfolio').css('height','240px!important');

    }else{
      var header_height = document.getElementsByClassName('custom-section-header')[0].offsetHeight; 
      var footer_height = document.getElementsByClassName('custom-section-footer')[0].offsetHeight; 

      var temp_height = $(window).height()-(header_height+footer_height);
      var rectangular_height = temp_height*0.39;
    

    $('.rectangular-portfolio').css('height',rectangular_height+'px');
    }
  }


  if ("ontouchstart" in document.documentElement)
{
$('.portfolio-overlay').css("top",0);
}







</script>

  </body>
  </html>