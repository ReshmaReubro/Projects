/*

Template: Webster - Responsive Multi-purpose HTML5 Template
Author: potenzaglobalsolutions.com
Design and Developed by: potenzaglobalsolutions.com

NOTE: This file includes all revolution slider scripts.

*/

(function($){
  "use strict";

/*************************************
    slider 01
 **************************************/
 var revapi11,
  tpj=jQuery;
     tpj(document).ready(function() {
        if(tpj("#rev_slider_11_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_11_1");
        }else{

          var header_height = document.getElementsByClassName('header')[0].offsetHeight; 
          var menu_height = document.getElementsByClassName('scroll-icon')[0].offsetHeight; 
          var screen_height = $(window).height();

          

          if($(window).width()>=768)
          {
            var custom_slider_height = (screen_height-(header_height+menu_height))-155;
          }
          else{
            var custom_slider_height = screen_height;
          }


          revapi11 = tpj("#rev_slider_11_1").show().revolution({
            sliderType:"standard",
            sliderLayout:"fullwidth",

            responsiveLevels: [$(window).width()],
            gridwidth:[$(window).width()],
            

            gridheight:[custom_slider_height],


            dottedOverlay:"none",
            delay:3000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              touch:{
                touchenabled:"on",
                touchOnDesktop:"off",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              }
              ,
              arrows: {
                style:"zeus",
                enable:false,
                hide_onmobile:true,
                hide_under:767,
                hide_onleave:true,
                hide_delay:200,
                hide_delay_mobile:0,
                tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                }
              }
            },
            
            lazyType:"none",
            shadow:0,
            spinner:"spinner2",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      }); 

  

 })(jQuery);