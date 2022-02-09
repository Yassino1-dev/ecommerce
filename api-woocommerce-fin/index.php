<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress_final_version', 
    'ck_476bde23822b8bf10a7bdcda0caaa1551b5a0119', 
    'cs_fe507d2a8bd5ad637fd376be3d4440ff9239be22',
    [
        'version' => 'wc/v3',
    ]
);

/**List Of Products **/
 //$products = $woocommerce->get('products');

 //echo '<pre>';
  //  print_r($products);
 //echo '</pre>';


/** Get one Product */
//  $product = $woocommerce->get('products/13');
//  echo '<pre>';
//     print_r($product);
//  echo '</pre>';

/** Update a Product */

// $data = [
//     'regular_price' => '5000.00'
// ];

//  $response = $woocommerce->put('products/13', $data);

//   echo '<pre>';
//      print_r($response);
//   echo '</pre>';

/** Create a Product */
// echo '<pre>';
// print_r($woocommerce->get('products/categories'));
// echo '</pre>';
// die;

// $data = [
//     'name' => 'ENSAT T-Shirt',
//     'type' => 'simple',
//     'regular_price' => '39.99',
//     'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
//     'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
//     'categories' => [
//         [
//             'id' => 9
//         ],
//         [
//             'id' => 14
//         ]
//     ],
//     'images' => [
//         [
//             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg'
//         ],
//         [
//             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
//         ]
//     ]
// ];

// $res = $woocommerce->post('products', $data);

// echo '<pre>';
//     print_r($res);
// echo '</pre>';

/** Delete a Product */

$woocommerce->delete('products/22', ['force' => true])

?>