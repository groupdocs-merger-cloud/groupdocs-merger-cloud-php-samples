<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to import attachment into pdf document
class ImportAttachment {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("Pdf/one-page-password.pdf");         
        $fileInfo->setPassword("password");

        $options = new Model\ImportOptions();
        $options->setFileInfo($fileInfo);
        $options->setAttachments(["Txt/document.txt"]);
        $options->setOutputPath("Output/with-attachment.pdf");

        $request = new Requests\importRequest($options);       
        $response = $documentApi->import($request);
        
        echo "Output file path: " . $response->getPath();    
        echo "\n";                        
    }
}
