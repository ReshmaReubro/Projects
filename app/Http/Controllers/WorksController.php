<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
use App\Work;
use App\Client;

class WorksController extends Controller
{
    public function index(){

        $site_name = 'PS & Company';
        $page_title = 'A boutique advertising agency';

        $page_description = 'At PS & Company we create integrated brand experiences that empower brands to stay connected with today’s audience. As a boutique advertising agency, we mingle strategic thinking with creative applications to reimagine brand communication. As we discover new opportunities in the global landscape, we foster a dialogue between brands and audience to achieve a desired impact.';



        $services = Service::latest()->get();

        $clients = Client::all();

        

        $featured_works = Work::with('service')->where('featured','=','1')->get();

        return view('index',compact('services','featured_works','site_name','page_title','page_description','clients'));

    }

    public function workList($service_slug){

    	$service_data = Service::where('slug','=',$service_slug)->firstOrFail();

        //dd($service_data->name);

        $site_name = 'PS & Company';
        $page_name = 'Works';
        $page_title = $service_data->name;

        $page_description = $service_data->meta_description;



    	$works = Work::where('service_id','=',$service_data->id)->get();

    	return view('works',compact('works','service_slug','site_name','page_name','page_title','page_description'));

    }


    public function show($service_slug,$work_slug){

    	$service_data = Service::select('id','name')->where('slug','=',$service_slug)->firstOrFail();

    	$work_data = Work::with('relatedworkimage','relatedworkvideo')
    						->where('slug','=',$work_slug)
    						->where('service_id','=',$service_data->id)
    						->firstOrFail();


        $site_name = 'PS & Company';
        $page_name = $service_data->name;
        $page_title = $work_data->name;

        $page_description = $work_data->meta_description;


                            

        foreach ($work_data->relatedworkvideo as $key => $value) {

            if(str_contains($value->video,'vimeo')){
                $splitted_vimeo_url = explode('/',$value->video);

                $vimeo_data = unserialize(file_get_contents("http://vimeo.com/api/v2/video/".end($splitted_vimeo_url).".php"));

                $work_data->relatedworkvideo[$key]['thumbnail_medium'] = $vimeo_data[0]['thumbnail_medium'];
                $work_data->relatedworkvideo[$key]['thumbnail_large'] = $vimeo_data[0]['thumbnail_large'];

                if(str_contains($work_data->relatedworkvideo[$key]->video,'https'))
                {
                    $work_data->relatedworkvideo[$key]->video = str_replace('https', 'http', $work_data->relatedworkvideo[$key]->video);


                }


            }
                
        }

        

        $services = Service::latest()->get();



        


    	return view('single-work',compact('work_data','services','site_name','page_name','page_title','page_description'));

    }
}
