<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to rotate document pages
class RotatePages {
    public static function Run() {
        
        $pagesApi = CommonUtils::GetPagesApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("Pdf/ten-pages.pdf");         
        
        $options = new Model\RotateOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/rotate-pages.pdf");
        $options->setPages([2, 4]);
        $options->setMode(Model\RotateOptions::MODE_ROTATE90);      

        $request = new Requests\rotateRequest($options);       
        $response = $pagesApi->rotate($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
