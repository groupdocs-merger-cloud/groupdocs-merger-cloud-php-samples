<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to mix specific pages from several source documents
class MixPages {
    public static function Run() {
        
        $documentApi = CommonUtils::GetDocumentApiInstance();

        $fileInfo1 = new Model\FileInfo();
        $fileInfo1->setFilePath("WordProcessing/sample-10-pages.docx");

        $fileInfo2 = new Model\FileInfo();
        $fileInfo2->setFilePath("WordProcessing/four-pages.docx");

        $mixPagesItem1 = new Model\MixPagesItem();
        $mixPagesItem1->setFileIndex(0);
        $mixPagesItem1->setPages([1, 2]);

        $mixPagesItem2 = new Model\MixPagesItem();
        $mixPagesItem2->setFileIndex(1);
        $mixPagesItem2->setPages([1, 2]);

        $mixPagesItem3 = new Model\MixPagesItem();
        $mixPagesItem3->setFileIndex(0);
        $mixPagesItem3->setPages([3, 4]);

        $options = new Model\MixPagesOptions();
        $options->setFiles([$fileInfo1, $fileInfo2]);
        $options->setFilesPages([$mixPagesItem1, $mixPagesItem2, $mixPagesItem3]);
        $options->setOutputPath("Output/mixed-pages.docx");

        $request = new Requests\MixRequest($options);
        $response = $documentApi->mix($request);

        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}