<section class="vertical-scrolling text-center" id="home" >

      
<!--=================================
 banner -->
 
 <section class="rev-slider">
  <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"  data-alias="webster-slider-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.4.5.2 fullwidth mode -->
   <div id="rev_slider_11_1" class="rev_slider" style="display:none;" data-version="5.4.5.2">
     <ul>  <!-- SLIDE  -->



      @foreach($featured_works as $featured_work)



      <li data-index="{{$featured_work->id}}" data-link="{{URL::asset('services/'.$featured_work->service->slug.'/'.$featured_work->slug)}}" data-transition="fade"  data-hideafterloop="0" data-hideslideonmobile="off"  data-masterspeed="default"   data-saveperformance="off"  data-title="{{$featured_work->name}}" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="{{$featured_work->description}}">
        <!-- MAIN IMAGE -->



            <img src="{{Storage::URL($featured_work->image)}}"  alt="{{$featured_work->name}} image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <div class="tp-caption tp-resizeme" data-transition="fade"
 
     data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}{{--, 
                   {"delay": "wait", "speed": 300, "to": "opacity: 0"}--}}]' 
 
     data-type="image" 
     data-x="center" 
     data-y="center" 
     data-hoffset="0" 
     data-voffset="0" 
     data-width="['auto']"
     data-height="['auto']"
 
>


<img class=" text-center" src="images/custom/logo.png" alt=""> 


</div>

        
      </li>




      @endforeach
      

    </ul>
  <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
 </div>
</section>

<!--=================================
 banner -->


 {{--
 <img class=" text-center" src="images/custom/logo.png" alt=""> 
      
      --}}


      <div class="scroll-icon" id="horizontal-nav">

        <ul>
          <li><a href="#about-us-section">What We Do</a></li>
          <li><a href="#our-services-section"> Our Services</a></li>
          <li><a href="#our-clients-section">Our Clients</a></li>
          <li><a href="#contact-us-section">Contact Us</a></li>
        </ul>


        

      </div>

    </section>