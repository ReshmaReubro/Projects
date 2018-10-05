<section class="vertical-scrolling text-center" id="our-clients"  >

	@include('layouts.top-small-logo')
	

	<div class="container">
		<div class="row mt-60 mb-60">
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 "></div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">

        <div class="slick-client-slider">


          @foreach($clients as $client)
            <img src="{{Storage::url('/'.explode('.',$client->image)[0].'-cropped.'.pathinfo($client->image, PATHINFO_EXTENSION))}}" alt="{{$client->image_alt_tag}}"/>
        
          @endforeach

          {{--
          <img src="images/clients/01.png" alt="Brave Logo"/>
          <img src="images/clients/02.png" alt="Hug Love Digital Logo"/>
          <img src="images/clients/03.png" alt="Saudi German Hospital Dubai Logo"/>
          <img src="images/clients/04.png" alt="RSA Logo"/>
          <img src="images/clients/05.png" alt="SKSH Logo"/>
          <img src="images/clients/06.png" alt="TJS Logo"/>
          <img src="images/clients/07.png" alt="Reed Exhibitions Logo"/>
          <img src="images/clients/08.png" alt="Extra Cake Logo"/>   

          --}}
          

        </div>

      </div>
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    </div>
  </div>

  <h3 class="custom-section-footer">Our Clients</h3>

</section>