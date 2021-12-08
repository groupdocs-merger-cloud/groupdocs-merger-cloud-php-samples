<?php

use GroupDocs\Merger\Model;
use GroupDocs\Merger\Model\Requests;

// This example demonstrates how to get metered license consumption info.
class GetLicenseConsumption {
    public static function Run() {
        $licenseApi = CommonUtils::GetLicenseApiInstance();
        $response = $licenseApi->getConsumptionCredit();
        echo "Credits = " . strval($response->getCredit());
        echo "\n";                            
    }
}
