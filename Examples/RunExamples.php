<?php
// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

include(__DIR__ . '\CommonUtils.php');
include(__DIR__ . '\GetSupportedFileTypes.php');
include(__DIR__ . '\GetDocumentInformation.php');
include(__DIR__ . '\DocumentOperations\JoinMultipleDocuments.php');
include(__DIR__ . '\DocumentOperations\JoinPagesFromVariousDocuments.php');
include(__DIR__ . '\DocumentOperations\JoinDocumentsCrossFormat.php');
include(__DIR__ . '\DocumentOperations\ImportAttachment.php');
include(__DIR__ . '\DocumentOperations\PreviewDocument.php');
include(__DIR__ . '\DocumentOperations\SplitDocument\SplitToMultiPageDocuments.php');
include(__DIR__ . '\DocumentOperations\SplitDocument\SplitToSinglePages.php');
include(__DIR__ . '\DocumentOperations\SplitDocument\SplitToSinglePagesByRange.php');
include(__DIR__ . '\DocumentOperations\SplitDocument\SplitToSinglePagesByRangeWithFilter.php');
include(__DIR__ . '\PagesOperations\ExtractPages\ExtractPagesByNumbers.php');
include(__DIR__ . '\PagesOperations\ExtractPages\ExtractPagesByRange.php');
include(__DIR__ . '\PagesOperations\ChangePageOrientation.php');
include(__DIR__ . '\PagesOperations\MovePage.php');
include(__DIR__ . '\PagesOperations\RemovePages.php');
include(__DIR__ . '\PagesOperations\RotatePages.php');
include(__DIR__ . '\PagesOperations\SwapPages.php');
include(__DIR__ . '\SecurityOperations\AddDocumentPassword.php');
include(__DIR__ . '\SecurityOperations\CheckDocumentPasswordProtection.php');
include(__DIR__ . '\SecurityOperations\RemoveDocumentPassword.php');
include(__DIR__ . '\SecurityOperations\UpdateDocumentPassword.php');


// Uploading sample files into storage
CommonUtils::UploadResources();

// Get all supported file types
GetSupportedFileTypes::Run();

// Get document info
GetDocumentInformation::Run();

// Join Multiple Documents
JoinMultipleDocuments::Run();

// Join Pages From Various Documents
JoinPagesFromVariousDocuments::Run();

// Join multiple documents of various formats into one document.
JoinDocumentsCrossFormat::Run();

// Import attachment into pdf document
ImportAttachment::Run();

// Preview Document
PreviewDocument::Run();

// Split Document
SplitToMultiPageDocuments::Run();
SplitToSinglePages::Run();
SplitToSinglePagesByRange::Run();
SplitToSinglePagesByRangeWithFilter::Run();

// Extract Pages
ExtractPagesByNumbers::Run();
ExtractPagesByRange::Run();

// Change Page Orientation
ChangePageOrientation::Run();

// Move Page
MovePage::Run();

// Remove Pages
RemovePages::Run();

// Rotate Pages
RotatePages::Run();

// Swap Pages
SwapPages::Run();

// Add Document Password
AddDocumentPassword::Run();

// Check Document Password Protection
CheckDocumentPasswordProtection::Run();

// Remove Document Password
RemoveDocumentPassword::Run();

// Update Document Password
UpdateDocumentPassword::Run();
