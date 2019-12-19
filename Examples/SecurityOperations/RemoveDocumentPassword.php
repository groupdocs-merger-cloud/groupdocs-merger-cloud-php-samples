<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to remove document password
class RemoveDocumentPassword {
    public static function Run() {
        
        $securityApi = CommonUtils::GetSecurityApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/password-protected.docx");         
        $fileInfo->setPassword("password");

        $options = new Model\Options();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/remove-password.docx");

        $request = new Requests\removePasswordRequest($options);       
        $response = $securityApi->removePassword($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
