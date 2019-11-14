// DocSection: managing_navigation_articles_depth
<?php
// Tip: Find more about PHP SDKs at https://docs.kontent.ai/php

// Defined by Composer to include required libraries
require __DIR__ . '/vendor/autoload.php';

use Kentico\Kontent\Delivery\DeliveryClient;

$client = new DeliveryClient('24246f25-946d-4ab4-b170-fadef22fe7b2');

$item = $client->getItem('root_navigation_item', (new QueryParams())
            ->depth(5));
// EndDocSection