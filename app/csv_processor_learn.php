<?php

include '../vendor/autoload.php'; // not sure why this is required, but found it at http://stackoverflow.com/questions/23673324/class-not-found-with-psr-0
use League\Csv\Reader;
//$csvFile = new SplFileInfo('./test.csv');
//$csvFilePath = $csvFile->getRealPath();




function GetLineHashFromCsv($incomingFile)  // need to be able to receive the pointer to the csv file here
{
    $csv = Reader::createFromPath($incomingFile); //was test.csv
    //$csvFile = new SplFileInfo('./test.csv');
    //$csvFilePath = $csvFile->getRealPath();
    //$csv = Reader::createFromFileObject($csvFile);

    $arrObjAllLines = array();
    $csvLine = 0;
//get the first row, usually the CSV header
    $header = $csv->fetchOne();
    $numFields = count($header);


    $headerObject = (object)$header;

    $rows = $csv->setOffset(1)->fetch();
    foreach ($rows as $row) {
        $csvLine++;
        if (count($row) != $numFields) {
         //   echo "Row " . $csvLine . ": ERROR! Not same number of fields! Skipping... \n";
            // need to throw an error here
        } else {
            $arrRowWithFields = array_combine($header, $row);
            $hashAllLines[$csvLine] = $arrRowWithFields;
        }
    }


    return ($hashAllLines);
}


