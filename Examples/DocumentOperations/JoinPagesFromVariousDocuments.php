<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to join specific pages from several source documents
class JoinPagesFromVariousDocuments {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();
        
        $fileInfo1 = new Model\FileInfo();
        $fileInfo1->setFilePath("WordProcessing/sample-10-pages.docx");         
        $item1 = new Model\JoinItem();        
        $item1->setFileInfo($fileInfo1);
        $item1->setPages([3, 6, 8]);

        $fileInfo2 = new Model\FileInfo();
        $fileInfo2->setFilePath("WordProcessing/four-pages.docx");          
        $item2 = new Model\JoinItem();
        $item2->setFileInfo($fileInfo2); 
        $item2->setStartPageNumber(1);               
        $item2->setEndPageNumber(4);
        $item2->setRangeMode(Model\JoinItem::RANGE_MODE_ODD_PAGES);
        
        $options = new Model\JoinOptions();
        $options->setJoinItems([$item1, $item2]);
        $options->setOutputPath("Output/joined-pages.docx");

        $request = new Requests\joinRequest($options);       
        $response = $documentApi->join($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";                        
    }
}
