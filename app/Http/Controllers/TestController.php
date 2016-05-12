<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class TestController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

	public function index() 
	{

		return "Here's the contact page";
	}

    public function showAllProducts()
    {


        $allProducts = Product::all();
/*
        [
            "id" => 1,
            "GTIN" => 1234,
            "product_name" => "my test product",
            "brick_code" => "",
            "product_description" => "",
            "product_id" => 0,
            "created_at" => "2016-05-09 00:37:01",
            "updated_at" => "2016-05-09 00:37:01",
        ]
 */




        return view('pages/showAll', array('allProducts' => $allProducts));



    }




}
