<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

use App\Mail\ContactForm;

class SendMailController extends Controller
{
    public function send()
    {
    
    	$this->validate(Request(), [
	        'name' => 'required|min:3',
	        'email' => 'required|email',
	        'phone' => 'required',
	        'message' => 'required',
            'WhatIsItRegarding' => 'required',
            'g-recaptcha-response' => 'required|captcha'
	        ]);



    	$mailable = new ContactForm;

		$mailable->replyTo(Request('email'),Request('name'));
		$mailable->subject(Request('subject'));


	    //\Mail::to('sc@designsbyps.com')->cc('vn@designsbyps.com')->bcc('ps@designsbyps.com')->send($mailable);

$emails = 'sc@designsbyps.com,vn@designsbyps.com,ps@designsbyps.com';

\Mail::to(explode(',',$emails))->send($mailable);

//\Mail::to('ak@designsbyps.com')->send($mailable);




//"sc@designsbyps.com", "vn@designsbyps.com" and  "ps@designsbyps.com". 


        if(\Mail::failures())
        {
            $notification = array(
            'message' => 'Oops! Something went wrong', 
            'alert-type' => 'error'
            );

            
            return Redirect::to(URL::previous()."#contact-us-section")->with($notification);

        }
        else
        {
            $notification = array(
            'message' => 'Thanks! We shall get back to you soon.', 
            'alert-type' => 'success'
            );

        }


        return redirect()->back()->with($notification);

	    


    }
}
