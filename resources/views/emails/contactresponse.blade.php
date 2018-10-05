@component('mail::layout')
   @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            Contact Form
        @endcomponent
    @endslot





@component('mail::table')
| Label       | Data         
| ------------- |:-------------:
| Name      | {{Request('name')}}  
| Email      | {{Request('email')}}  
| Phone      | {{Request('phone')}}
| Regarding      | {{Request('WhatIsItRegarding')}}    
| Message      | {{Request('message')}}    
@endcomponent

 	@slot('footer')
        @component('mail::footer')
            Email from Designsbyps.com Contact Form
        @endcomponent
    @endslot


@endcomponent
