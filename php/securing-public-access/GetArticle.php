// DocSection: securing_public_access_get_article
<?php
// Tip: Find more about PHP SDKs at https://docs.kontent.ai/php

// Defined by Composer to include required libraries
require __DIR__ . '/vendor/autoload.php';

use Kentico\Kontent\Delivery\DeliveryClient;

$client = new DeliveryClient('975bf280-fd91-488c-994c-2f04416e5ee3', '<YOUR_API_KEY>');

$item = $client->getItem('on_roasts');
// EndDocSection