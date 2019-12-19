<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to extract document pages by specifying their numbers
class ExtractPagesByNumbers {
    public static function Run() {
        
        $pagesApi = CommonUtils::GetPagesApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/sample-10-pages.docx");         
        
        $options = new Model\ExtractOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/extract-pages-by-numbers.docx");
        $options->setPages([2, 4, 7]);

        $request = new Requests\extractRequest($options);       
        $response = $pagesApi->extract($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
