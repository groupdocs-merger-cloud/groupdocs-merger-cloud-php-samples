<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to join images.
class JoinImages {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();
        
        $fileInfo1 = new Model\FileInfo();
        $fileInfo1->setFilePath("Img/task1.jpg");         
        $item1 = new Model\JoinItem();        
        $item1->setFileInfo($fileInfo1);

        $fileInfo2 = new Model\FileInfo();
        $fileInfo2->setFilePath("Img/task2.jpg");
        $item2 = new Model\JoinItem();
        $item2->setFileInfo($fileInfo2);
        $item22->setWordJoinMode(Model\JoinItem::IMAGE_JOIN_MODE_VERTICAL);
        
        $options = new Model\JoinOptions();
        $options->setJoinItems([$item1, $item2]);
        $options->setOutputPath("Output/joined.jpg");

        $request = new Requests\joinRequest($options);       
        $response = $documentApi->join($request);
        
        echo "Output file path: " . $response->getPath();    
        echo "\n";                        
    }
}
