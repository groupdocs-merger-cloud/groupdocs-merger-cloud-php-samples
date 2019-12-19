<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to generate document pages preview
class PreviewDocument {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/four-pages.docx");         
        
        $options = new Model\PreviewOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/preview-page");
        $options->setPages([1, 3]);
        $options->setFormat(Model\PreviewOptions::FORMAT_PNG);

        $request = new Requests\previewRequest($options);       
        $response = $documentApi->preview($request);
        
        echo "Documents count: " . strval(count($response->getDocuments()));
        echo "\n";
    }
}
