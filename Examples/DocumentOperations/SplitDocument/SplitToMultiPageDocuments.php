<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to split the document to several multi-page documents by specified page ranges
class SplitToMultiPageDocuments {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/sample-10-pages.docx");         
        
        $options = new Model\SplitOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/split-to-multipage-document");
        $options->setPages([3, 6, 8]);
        $options->setMode(Model\SplitOptions::MODE_INTERVALS);

        $request = new Requests\splitRequest($options);       
        $response = $documentApi->split($request);
        
        echo "Documents count: " . strval(count($response->getDocuments()));
        echo "\n";
    }
}
