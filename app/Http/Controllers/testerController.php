<?php

namespace App\Http\Controllers;

require(app_path() . '/csv_processor_learn.php');
use Illuminate\Http\Request;
use App\Testentry;
use App\Http\Requests;

class testerController extends Controller
{



    function store()
    {
        //get input from a form and create your model then save to db


                 $ManualArrayEntry = Testentry::create(array(
                    'field_1' => 'this is a manual array 1',
                    'field_2'=> 'this is a manual array 2',
                    'field_3'  => 'this is a manual array 3',
                ));
                print_r($ManualArrayEntry);
                $ManualArrayEntry->save();

//        $testentries = Testentry::all();

        $ManualTestEntry = new Testentry();
        // manual creation, before I have a form to use:
        $ManualTestEntry->field_1 = 'this is field one made by hand';
        $ManualTestEntry->field_2 = 'this is field two made by hand';
        $ManualTestEntry->field_3 = 'this is field three made by hand';


  //      print_r($ManualTestEntry);
               $ManualTestEntry->save();
        // alternate way? if don't have an array, but changing one field?
        // $testEntry = new Testentry;
        // $testEntry->field_1 = Input::get('field_1');


        print("about to do next one\n\n");
         $hashOfLines = GetLineHashFromCsv();  // function from csv_processor_learn.php
        ///       $arrLines = ObjectArrayFromCsv();
        ///       $arrayOneLine = $arrLines[1];
        $arrayOneLine = (array) $hashOfLines[1]; // have to cast to array in order for Model::create() to work

               $CreatedTestEntry = Testentry::create($arrayOneLine); /// create needs and assoc. array with field names, this won't work
        ///       print_r($CreatedTestEntry);


       ///  print_r($CreatedTestEntry);
        $CreatedTestEntry->save();
        print('done');

        //HERE WE ARE: Have to figure out how to
        /// assign the values of our line object to the testEntry model
        //$testEntry = $arrLineObjects["1"];

        /*
        if($testEntry->save())
        {
            //          return Redirect::route('pages.showAll');
            return redirect()->to('showTestEntries');
        } else {
            return("save failed!");
        }
        //     */
    }


}
