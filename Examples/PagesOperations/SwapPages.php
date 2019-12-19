<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to swap document pages
class SwapPages {
    public static function Run() {
        
        $pagesApi = CommonUtils::GetPagesApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/four-pages.docx");         
        
        $options = new Model\SwapOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/swap-pages.docx");
        $options->setFirstPageNumber(2);
        $options->setSecondPageNumber(4);

        $request = new Requests\swapRequest($options);       
        $response = $pagesApi->swap($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
