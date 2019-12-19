<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to change document page orientation
class ChangePageOrientation {
    public static function Run() {
        
        $pagesApi = CommonUtils::GetPagesApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/four-pages.docx");         
        
        $options = new Model\OrientationOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/change-page-orientation.docx");
        $options->setPages([2, 4]);
        $options->setMode(Model\OrientationOptions::MODE_LANDSCAPE);

        $request = new Requests\orientationRequest($options);       
        $response = $pagesApi->orientation($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
