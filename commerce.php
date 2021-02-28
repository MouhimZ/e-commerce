<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://bookmaze.test', 
    'ck_d8096121e6052f710a28ea4019fdd760e6c3d036', 
    'cs_5ad8b4ae8f0d2e27343aef288aee76d96a4312b0',
    [
        'wp_api' => true, 'version' => 'wc/v3',
    ]
);

?>