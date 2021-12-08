<?php

// Common class to hold the constants and static functions
class CommonUtils {

    // TODO: Get your ClientId and ClientSecret at https://dashboard.groupdocs.cloud (free registration is required)
    static $ClientId = 'XXXX-XXXX-XXXX-XXXX';
    static $ClientSecret = 'XXXXXXXXXXXXXXXX';
    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'First Storage';

    // Getting the Document API Instance
    public static function GetDocumentApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new EditAPI instance
        return new GroupDocs\Merger\DocumentApi($configuration);
    }

    // Getting the Pages API Instance
    public static function GetPagesApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new EditAPI instance
        return new GroupDocs\Merger\PagesApi($configuration);
    }

    // Getting the Security API Instance
    public static function GetSecurityApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new EditAPI instance
        return new GroupDocs\Merger\SecurityApi($configuration);
    }    

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new Info instance
        return new GroupDocs\Merger\InfoApi($configuration);
    }

	// Getting the Merger StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);
        
        // Retrun the new StorageApi instance
        return new GroupDocs\Merger\StorageApi($configuration);
    }

     // Getting the Merger FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new FolderApi instance
        return new GroupDocs\Merger\FolderApi($configuration);
    }

	// Getting the Merger FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new FileApi instance
        return new GroupDocs\Merger\FileApi($configuration);
    }

	// Getting the Merger LicenseAPI API Instance
    public static function GetLicenseApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Merger\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$ClientId);
        $configuration->setAppKey(CommonUtils::$ClientSecret);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new LicenseApi instance
        return new GroupDocs\Merger\LicenseApi($configuration);
    }

    // Uploading sample files into storage
    public static function UploadResources() {
        $storageApi = self::GetStorageApiInstance();
        $fileApi = self::GetFileApiInstance();
        $folder = realpath(__DIR__ . '\Resources');
        $filePathInStorage = "";
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);
        echo 'Uploading file process executing...';
        echo "\n";
        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();
                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                echo $filePathInStorage;
                echo "\n";
                $isExistRequest = new \GroupDocs\Merger\Model\Requests\objectExistsRequest($filePathInStorage);
                $isExistResponse = $storageApi->objectExists($isExistRequest);
                if (!$isExistResponse->getExists()) {
                    $putCreateRequest = new \GroupDocs\Merger\Model\Requests\uploadFileRequest($filePathInStorage, $filePath);
                    $putCreateResponse = $fileApi->uploadFile($putCreateRequest);
                }
            }
        }        
    }
}
