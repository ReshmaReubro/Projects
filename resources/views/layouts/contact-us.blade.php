 <section class="vertical-scrolling text-center" id="contact-us">

  @include('layouts.top-small-logo')
  
  <div class="container  contact-designbyps">

    <div class="row">

      <div class="pt-70 visible-md"></div>
      <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 "></div>
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 ">

        @if ($errors->any())
        <div class="alert alert-danger text-left">
          <ul class="list list-unstyled">
            
            @foreach ($errors->all() as $error)
            <li class="pt-10">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form class="form-horizontal"  role="form" method="post" action="/sendemail">

          {{csrf_field()}}
          
          <div class="contact-form border-form clearfix">
            <div class="section-field">
              <div class="col-md-6 col-sm-6 ">
                <input type="text" placeholder="Name*" class="form-control mixed-case input-lg input-md input-sm input-xs"  name="name" value="{{old('name')}}" required>
              </div>

              <div class="col-md-6 col-sm-6 ">
                <input type="email" placeholder="Email*" class="form-control mixed-case" name="email" value="{{old('email')}}" required>
              </div>
            </div>

            <div class="section-field">
              <div class="col-md-6 col-sm-6 ">
                <input type="text" placeholder="I'm interested in" class="form-control mixed-case"  name="WhatIsItRegarding" value="{{old('WhatIsItRegarding')}}" required>
              </div>
              
              <div class="col-md-6 col-sm-6 ">
                <input type="text" placeholder="Phone*" class="form-control mixed-case" name="phone" value="{{old('phone')}}"  required>
              </div>
            </div>
            <div class="section-field textarea">
             <div class="col-md-12">
               <textarea class="input-message form-control mixed-case " placeholder="Message*"  rows="4" name="message" required  >{{old('message')}}</textarea>
             </div>
           </div>


           <div class="section-field">
            <div class="col-md-12">
              <div class="text-xs-center">P S AND COMPANY DWC-LLC<br>
BUSINESS CENTER DUBAI WORLD CENTRAL P.O BOX 390667 DUBAI, UAE<br>
PHONE: +971 50 4296 119 EMAIL: sc@designsbyps.com

               
              </div>
            </div>
          </div>

          <input type="hidden" name="action" value="sendEmail"/>
          <div class="mt-30 visible-sm"></div>

          <div class="section-field mt-10">
            <div class="col-md-12">

             <button  name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>

           </div>

         </div>
       </div> 
     </form>
   </div>
   <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
 </div>
</div>
<h3 class="custom-section-footer">Contact US</h3>

</section>