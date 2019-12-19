<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to extract document pages by specifying page numbers range
class ExtractPagesByRange {
    public static function Run() {
        
        $pagesApi = CommonUtils::GetPagesApiInstance();
        
        $fileInfo = new Model\FileInfo();
        $fileInfo->setFilePath("WordProcessing/sample-10-pages.docx");         
        
        $options = new Model\ExtractOptions();
        $options->setFileInfo($fileInfo);
        $options->setOutputPath("Output/extract-pages-by-range.docx");
        $options->setStartPageNumber(1);
        $options->setEndPageNumber(10);
        $options->setRangeMode(Model\ExtractOptions::RANGE_MODE_EVEN_PAGES);

        $request = new Requests\extractRequest($options);       
        $response = $pagesApi->extract($request);
        
        echo "Output file path: " . $response->getPath();
        echo "\n";
    }
}
