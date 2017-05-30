<?php
namespace App;

include '../vendor/autoload.php';
include '../bootstrap/app.php';

use App\Testentry;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\Eloquent\Model;

//require(app_path() . '/csv_processor_learn.php');
//require('csv_processor_learn.php');




    function store()
    {
        //get input from a form and create your model then save to db

/*
         $ManualTestEntry = testentry::create(array(
            'field_1' => Input::get('field_1'),
            'field_2'=> Input::get('field_2'),
            'field_3'  => Input::get('field_3')
        ));
        print_r($ManualTestEntry);

*/

//        $testentries = testentry::all();

$ManualTestEntry = new testentry();
         // manual creation, before I have a form to use:
        $ManualTestEntry->field_1 = 'this is field one made by hand';
        $ManualTestEntry->field_2 = 'this is field two made by hand';
        $ManualTestEntry->field_3 =  'this is field three made by hand';


        print_r($ManualTestEntry);
 //       $ManualTestEntry->save();
         // alternate way? if don't have an array, but changing one field?
         // $testEntry = new testentry;
         // $testEntry->field_1 = Input::get('field_1');

exit();
print("about to do next one\n\n");
        // $arrLineObjects = ObjectArrayFromCsv();  // function from csv_processor_learn.php
 ///       $arrLines = ObjectArrayFromCsv();
 ///       $arrayOneLine = $arrLines[1];
        //$arrayOneLine = (array) $arrLineObjects["1"]; // have to cast to array in order for Model::create() to work

 ///       $CreatedTestEntry = testentry::create($arrayOneLine); /// create needs and assoc. array with field names, this won't work
 ///       print_r($CreatedTestEntry);


        //print_r($testEntry);
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





store();