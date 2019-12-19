<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to remove document pages
class RemovePages {
    public static function Run() {
        
        $pagesApi = CommonUtils::GetPagesApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/four-pages.docx");         
        
        $options = new Model\RemoveOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/remove-pages.docx");
        $options->setPages([2, 4]);        

        $request = new Requests\removeRequest($options);       
        $response = $pagesApi->remove($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
