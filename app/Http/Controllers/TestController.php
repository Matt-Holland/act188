<?php

namespace App\Http\Controllers;

use App\complete_data_report;
use App\Disclosures\Disclosure;
use App\Product;
use App\import;
use App\importtest;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TestController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

	public function index()
	{

		return "Here's the contact page it's cool";
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

    public function doSearch(Request $request)
    {
        // $searchResults = DB::table('complete_data_reports')->where('ChemicalName', '120-47-8 Ethyl paraben')->value('DisclosureID');

        //$chemName = '%paraben%';
        $chemName = $request->input('chemName');
        //$chemName = $input['chemName']; //to get from a form
        $chemName = '%' . $chemName . '%';

        $searchResults = DB::table('complete_data_reports')
            ->select(DB::raw('ChemicalName, DisclosureID, ChemicalFunction, Component'))
            ->where('ChemicalName', 'LIKE', $chemName)
            ->get();




        //echo $found->DisclosureID;
        //$object = (object) ['property' => 'Here we go'];
        //$searchResults = (object) ['DisclosureID' => '1234'];
        return view('pages/searchTable', array('searchResults' => $searchResults));
    }

    public function showSearch(Request $request)
    {   // this is to create the dropdown menus


        $searchResults = DB::table('complete_data_reports')
            ->select(DB::raw('ChemicalName'))
            ->distinct()
            ->get();


       // return view('pages/showsearch', array('searchResults' => $searchResults));
        return view('pages/searchTable', array('searchResults' => $searchResults));
    }

    public function searchTable()
    {
        $searchResults = complete_data_report::all();
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

        return view('pages/searchTable', array('searchResults' => $searchResults));
    }


    public function searchImportTable(Request $request)
    {

        if ($request->input('ManufacturerName')) {
            $searchvar = $request->input('ManufacturerName');
            $colname = 'ManufacturerName';
            $wildcardSearchVar = "%{$searchvar}%";
            $searchResults = import::where($colname,"LIKE",$wildcardSearchVar)
                ->paginate(25);
        } elseif ($request->input('ChemicalName')) {
            $searchvar = $request->input('ChemicalName');
            $colname = 'ChemicalName';
            $wildcardSearchVar = "%{$searchvar}%";
            $searchResults = import::where($colname,"LIKE",$wildcardSearchVar)
                ->paginate(25);
        } elseif ($request->input('BrandName')) {
            $searchvar = $request->input('BrandName');
            $colname = 'BrandName';
            $wildcardSearchVar = "%{$searchvar}%";
            $searchResults = import::where($colname,"LIKE",$wildcardSearchVar)
                ->paginate(25);
        } elseif ($request->input('ProductModel')) {
            $searchvar = $request->input('ProductModel');
            $colname = 'ProductModel';
            $wildcardSearchVar = "%{$searchvar}%";
            $searchResults = import::where($colname,"LIKE",$wildcardSearchVar)
                ->paginate(25);
        } else {
            $colname = null;
            $searchvar = null;
            $searchResults = import::paginate(25);
        }


        return view('pages/searchImportTable', array(
            'searchResults' => $searchResults,
            'colname' => $colname,
            'searchvar'=> $searchvar,
            'ManufacturerName' => $request->input('ManufacturerName'),
            'ChemicalName' => $request->input('ChemicalName'),
            'BrandName' => $request->input('BrandName'),
            'ProductModel' => $request->input('ProductModel')
        ));
    }



    public function getEmbeddedFrameTable()
    {
        return view('pages/embeddedFrameTable');
    }
}
