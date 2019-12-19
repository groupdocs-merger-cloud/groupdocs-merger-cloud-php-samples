<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to move document page to a new position
class MovePage {
    public static function Run() {
        
        $pagesApi = CommonUtils::GetPagesApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/four-pages.docx");         
        
        $options = new Model\MoveOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/move-pages.docx");
        $options->setPageNumber(1);
        $options->setNewPageNumber(2);        

        $request = new Requests\moveRequest($options);       
        $response = $pagesApi->move($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
