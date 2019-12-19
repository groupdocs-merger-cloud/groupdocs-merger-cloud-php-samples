<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to split the document to several one-page documents (by start/end page numbers)
class SplitToSinglePagesByRange {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/sample-10-pages.docx");         
        
        $options = new Model\SplitOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/split-by-start-end-numbers");
        $options->setStartPageNumber(3);
        $options->setEndPageNumber(7);
        $options->setMode(Model\SplitOptions::MODE_PAGES);

        $request = new Requests\splitRequest($options);       
        $response = $documentApi->split($request);
        
        echo "Documents count: " . strval(count($response->getDocuments()));
        echo "\n";
    }
}
