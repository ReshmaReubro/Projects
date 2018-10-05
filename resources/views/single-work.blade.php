<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/png" href="{{URL::asset('favicon.png')}}" />
  <title>{{$page_title}} | {{$page_name}} | {{$site_name}}</title>
  <meta name="description" content="{{$page_description}}" />

  

  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/plugins-css.css')}}" />
  <!-- Shortcodes -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/shortcodes/combined.css')}}" />
  <!-- Style -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slider-pro.min.css')}}" media="screen"/>
  <link rel="stylesheet" type="text/css" href="{{URL::asset('libs/fancybox/jquery.fancybox.css')}}" media="screen"/>
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


     {{--
     <div class="text-center small-top-centered-logo-single-work ">
      <img class="text-center" src="{{URL::asset('images/custom/logo_small.png')}}" alt="PS & COMPANY Logo" >
    </div>

--}}

      <div class="text-center small-top-centered-logo-single-work visible-xs">
          <a href="{{URL::asset('/#home-section')}}"><img class="text-center" src="{{URL::asset('images/custom/logo_xs.png')}}" alt="PS & COMPANY Logo" ></a>
  </div>


  <div class="text-center small-top-centered-logo-single-work hidden-xs">
          <a href="{{URL::asset('/#home-section')}}"><img class="text-center" src="{{URL::asset('images/custom/logo_small.png')}}" alt="PS & COMPANY Logo" ></a>
  </div>


    <section class="page-section-pt" >
      <div class="container-fluid">
        <div class="row single-work-row" >
          <div class="col-lg-1 col-md-2"></div>

          <div class="col-lg-8 col-md-8 col-sm-12">

            <div id="single-work-box" 
            class="slider-pro single-work-box " 

            >




            <div class="sp-slides">

              @foreach($work_data->relatedworkimage as $work)
              <div class="sp-slide">
                <img class="sp-image" src="{{URL::asset('css/images/blank.gif')}}" 
                data-src="{{Storage::URL($work->image)}}"
                alt="{{Storage::URL($work->image)}} image" />

                <img class="sp-thumbnail" src="{{Storage::URL($work->image)}}"/>

                
              </div>
              @endforeach

              @foreach($work_data->relatedworkvideo as $work)



              <div class="sp-slide">
                <div class="sp-layer sp-static">
                  <a class="sp-video" href="{{$work->video}}">
                    @if(str_contains($work->video,'youtube'))
                    <img src="{{URL::asset('https://img.youtube.com/vi/'.explode('=',$work->video)[1].'/maxresdefault.jpg')}}" width="960" height="526"/>
                    @elseif(str_contains($work->video,'vimeo'))

                    <img src="{{$work->thumbnail_large}}" width="960" height="526"/>

                    @endif
                  
                  </a>

                  @if(str_contains($work->video,'youtube'))
        
                    <img class="sp-thumbnail" src="{{URL::asset('https://img.youtube.com/vi/'.explode('=',$work->video)[1].'/0.jpg')}}"/>
                  @elseif(str_contains($work->video,'vimeo'))

                    <img class="sp-thumbnail" src="{{$work->thumbnail_medium}}"/>

                  @endif


                  
                </div>


              </div>


              @endforeach

            </div>

          </div>



        </div>
        <div class="col-md-2"></div>

        <div class="col-lg-3 col-md-12 col-sm-12" >



            
              <div class="single-work-side-panel single-work-box pl-30" >
            <div class="mt-10 custom_text-md-center">
              <h2>{{strtoupper($work_data->name)}}</h2>
              
              <p class="mt-20">{{$work_data->description}}</p>

            </div>


            <div class="single-work-side-panel-menu ">
              <h4>Our Services</h4>
              <ul class="list list-arrow" >

                @foreach($services as $service )
                <li class="mt-20"><a href="{{URL::asset('services/'.$service->slug)}}">{{$service->name}} </a></li>
                @endforeach
                
              </ul>
            </div>
          </div>
            
          


        </div>
      </div>

    </div>

  </section>





  <!-- js files -->
  <script src="{{URL::asset('js/jquery.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/vendors/scrolloverflow.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/plugins-jquery.js')}}"></script>
  <!-- plugin_path -->
  <script type="text/javascript">
    var plugin_path = "<?php echo URL::asset('js'); ?>/"
  </script>

  <!-- custom -->
  <script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>

  <script type="text/javascript" src="{{URL::asset('js/jquery.sliderPro.min.js')}}"></script>

  <script type="text/javascript" src="{{URL::asset('libs/fancybox/jquery.fancybox.pack.js')}}"></script>


  <script src="{{URL::asset('js/matchheight.js')}}"></script>
  <script type="text/javascript">
    $( document ).ready(function( $ ) {
      $( '#single-work-box' ).sliderPro({
        width: 960,
        height: 530,
        fade: true,
        arrows: true,
        buttons: false,
        fullScreen: true,
        shuffle: true,

        /*smallSize: 500,
        mediumSize: 100,
        largeSize: 300,
        */
        thumbnailArrows: true,
        fadeThumbnailArrows : false,
        autoplay: false
      });
    });
  </script>



  <script>
    $(function() {
      $('.single-work-box').matchHeight();

    });
  </script>


</body>
</html>