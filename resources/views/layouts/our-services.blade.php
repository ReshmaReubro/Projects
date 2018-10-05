<section class="vertical-scrolling text-center" id="our-services" style="scroll-behavior:smooth; overflow-y: scroll;
  -webkit-overflow-scrolling: touch;">
  @include('layouts.top-small-logo')
  <div class="container-fluid services-rectangular">
    <div class="row">
      <div class="pt-60 visible-sm"></div>

      
      
      <div class="col-lg-12 col-md-12 col-xs-12 col-md-offset-0 col-lg-offset-0 visible-large">
        <div class="isotope columns-3 popup-gallery mt-10">
          @foreach($services as $service)
            <a href="{{URL::asset('services/'.$service->slug)}}">
              <div class="grid-item">
                <div class="portfolio-item  rectangular-portfolio">


                  <img class="img-responsive" src="{{Storage::url('/'.explode('.',$service->image)[0].'-cropped.'.pathinfo($service->image, PATHINFO_EXTENSION))}}" alt="{{$service->slug}}">
                  <div class="portfolio-overlay">
                    <h5 class="text-white"> {{title_case($service->name)}} </h5>
                    <span class="text-white"> {{$service->description}}
                    </span>  
                  </div>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>

      

    </div>
    <h3 class="custom-section-footer">Our Services</h3>
  </div>
</section>
