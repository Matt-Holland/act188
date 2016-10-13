<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


	public function contact() 
	{


		//$name = "matt";
		// return "Here's the contact page";
		//return view('pages/contact')->with([
		//		'first' => 'Matt',
		//		'last' => 'Holland'

		//	]);

		$name = [];
		$name['first'] = "matthew c";
		$name['last'] = "holland";
        print("this is just here for testing");
		return view('pages/contact', $name);

	}

    public function bootstrap()
    {
        return view('pages/bootstraptest');
    }




}
