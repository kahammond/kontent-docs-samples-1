// DocSection: preview_content_detect_environment
<?php
// Tip: Find more about PHP SDKs at https://docs.kontent.ai/php

// Defined by Composer to include required libraries
require __DIR__ . '/vendor/autoload.php';

use Kentico\Kontent\Delivery\DeliveryClient;

// TODO: Determine whether the app is running in a preview environment
$isPreview = ...;

$client = new DeliveryClient("<YOUR_PROJECT_ID>", $isPreview ? "<YOUR_PREVIEW_API_KEY>" : null);
// EndDocSection