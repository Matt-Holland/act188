<?php

namespace App\Http\Controllers;

use App\Testentry;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;

require(app_path() . '/csv_processor_learn.php');






class TestEntryController extends BaseController
{

    //this is from http://simpledeveloper.com/how-to-use-laravel-model/
    public function index()
    {

        //fetch all posts stored in db (those not deleted).
       // print("index function");
        $testentries = testentry::all();
        print_r($testentries);
        print ('this is here for debug');
       return view('pages/TestEntriesIndex', array('AllTestEntries' => $testentries));
    }

    public function create(){}

    public function show($id){}

    public function store($incomingFile) //need to be handed the pointer to the CSV from the form, here
    {
        //get input from a form and create your model then save to db
        // /home/vagrant/Code/act188/storage/upload/test.csv

        $arrLines = GetLineHashFromCsv($incomingFile); // need to pass the pointer to the CSV here
        $arrayOneLine = $arrLines[1];
        $testEntry = testentry::create($arrayOneLine);

        if($testEntry->save())
        {
            return redirect()->to('showTestEntries');
        } else {
            return("save failed!");
        }

    }

    public function edit($id){}

    public function update($id){}

    public function destroy($id){}

}
