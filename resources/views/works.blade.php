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


  <div class="text-center small-top-centered-logo-single-work visible-xs">
          <a href="{{URL::asset('/#home-section')}}"><img class="text-center" src="{{URL::asset('images/custom/logo_xs.png')}}" alt="PS & COMPANY Logo" ></a>
  </div>


  <div class="text-center small-top-centered-logo-single-work hidden-xs">
          <a href="{{URL::asset('/#home-section')}}"><img class="text-center" src="{{URL::asset('images/custom/logo_small.png')}}" alt="PS & COMPANY Logo" ></a>
  </div>





  <div class="mb-20 hidden-xs">&nbsp;</div>




  <section class="page-section-ptb">
      <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12">

          
          
          <div class="isotope columns-4 popup-gallery mt-70">
              


               @foreach($works as $work) 
               
                <a href="{{URL::asset('services/'.$service_slug.'/'.$work->slug)}}">
                  <div class="grid-item">
                  <div class="portfolio-item">
                   <img src="{{Storage::url('/'.explode('.',$work->image)[0].'-cropped.'.pathinfo($work->image, PATHINFO_EXTENSION))}}" alt="{{$work->slug}}">
                     <div class="portfolio-overlay">
                        <h4 class="text-white">{{title_case($work->name)}} </h4>
                      <span class="text-white"> {{$work->description}}
                      </span>  
                      </div>
                    
                  </div>
                  </div>
                </a>

               @endforeach


              
              </div>
          </div>
     </div>


    
      </div>

    </section>




<!-- js files -->
<script src="{{URL::asset('js/jquery.js')}}"></script>






<script type="text/javascript" src="{{URL::asset('js/plugins-jquery.js')}}"></script>




<!-- plugin_path -->
<script type="text/javascript">
var plugin_path = "<?php echo URL::asset('js'); ?>/"
</script>


<!-- custom -->
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>



</body>
</html>