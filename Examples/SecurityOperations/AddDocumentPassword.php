<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to add password to document
class AddDocumentPassword {
    public static function Run() {
        
        $securityApi = CommonUtils::GetSecurityApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/one-page.docx");         
        $fileInfo->setPassword("Password");

        $options = new Model\Options();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/add-password.docx");

        $request = new Requests\addPasswordRequest($options);       
        $response = $securityApi->addPassword($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
