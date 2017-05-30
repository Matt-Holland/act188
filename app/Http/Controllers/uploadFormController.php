<?php

namespace App\Http\Controllers;

require(app_path() . '/csv_processor_learn.php');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Testentry;
use App\Http\Requests;
use App\Services\FileService;

class uploadFormController extends Controller
{

    public function __construct(FileService $fileService)
    {
        $this->fileService = $fileService;
    }
    // make the controller ONLY 1) receive data, 2) wrangle it and pass it around and 3) give data back to user
    // as many methods as you want, but only those three tasks
    //
    // usually there are as many methods as there are routes that go there
    //
    // usually each model = one controller
    //
    // e.g. createTestEntry -> TestEntry controller(create), connected to TestEntry model

// LOTS OF EDITS BY KEENAN IN HERE

    public function viewForm() {
        return view('uploadForm');

    }


    public function receiveUpload() {
       // var_dump(Input::file('file'));
        $savedFilePath = $this->fileService->store(Input::file('file'));

        $uploadedFileName = Input::file('file')->getClientOriginalName();
        print(Input::file('file'))->getRealPath();
        print("\n");
        print("<br />");
        print(Input::file('file'))->getFilename();
        print("\n");
        print("<br />");
        print(Input::file('file'))->getClientOriginalName();
        $uploadDirectory = storage_path() . '/upload';
        Input::file('file')->move($uploadDirectory, $uploadedFileName);
        $uploadedFilePath = $uploadDirectory . "/" . $uploadedFileName;
        print "\n";
        print "moved to " . $uploadedFilePath;
        print "\n";
        $savedFilePath = '/home/vagrant/Code/act188/storage/upload/' . $uploadedFileName;

        self::store($uploadedFilePath);



    }


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


}
