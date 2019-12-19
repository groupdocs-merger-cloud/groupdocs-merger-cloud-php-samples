<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to get document info.
class GetDocumentInformation {
    public static function Run() {
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/password-protected.docx");
        $fileInfo->setPassword("password");
        $infoApi = CommonUtils::GetInfoApiInstance();
        $response = $infoApi->getInfo(new Requests\getInfoRequest($fileInfo));
        echo "Page Count = " . strval(count($response->getPages()));
        echo "\n";                            
    }
}
