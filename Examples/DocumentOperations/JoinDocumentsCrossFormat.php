<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to join multiple documents of various formats into one document
class JoinDocumentsCrossFormat {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();
        
        $fileInfo1 = new Model\FileInfo();
        $fileInfo1->setFilePath("Pdf/one-page-password.pdf");         
        $fileInfo1->setPassword("password");
        $item1 = new Model\JoinItem();        
        $item1->setFileInfo($fileInfo1);

        $fileInfo2 = new Model\FileInfo();
        $fileInfo2->setFilePath("WordProcessing/one-page.docx");          
        $item2 = new Model\JoinItem();
        $item2->setFileInfo($fileInfo2);                
        
        $options = new Model\JoinOptions();
        $options->setJoinItems([$item1, $item2]);
        $options->setOutputPath("Output/joined.pdf");

        $request = new Requests\joinRequest($options);       
        $response = $documentApi->join($request);
        
        echo "Output file path: " . $response->getPath();    
        echo "\n";                        
    }
}
