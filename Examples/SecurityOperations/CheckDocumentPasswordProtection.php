<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to check document password
class CheckDocumentPasswordProtection {
    public static function Run() {
        
        $securityApi = CommonUtils::GetSecurityApiInstance();
        
        $request = new Requests\checkPasswordRequest("WordProcessing/password-protected.docx");       
        $response = $securityApi->checkPassword($request);
        
        echo "Check password: " . strval($response->getIsPasswordSet());
        echo "\n";
    }
}
