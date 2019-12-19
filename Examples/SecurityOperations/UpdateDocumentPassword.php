<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to update document password
class UpdateDocumentPassword {
    public static function Run() {
        
        $securityApi = CommonUtils::GetSecurityApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/password-protected.docx");         
        $fileInfo->setPassword("password");

        $options = new Model\UpdatePasswordOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/update-password.docx");
        $options->setNewPassword("NewPassword");

        $request = new Requests\updatePasswordRequest($options);       
        $response = $securityApi->updatePassword($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
