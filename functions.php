<?php

// Set the API Key:
define('PODIO_API_KEY', 'YOUR_API_KEY_GOES_HERE');

// Set the App ID:
define('PODIO_APP_ID', 'YOUR_APP_ID_GOES_HERE');

// Set the App Token:
define('PODIO_APP_TOKEN', 'YOUR_APP_TOKEN_GOES_HERE');

// Set the list of fields to work with:
$podio_fields = array(
    "foo" => $_POST["field_name_foo_here"],
    "bar" => $_POST["field_name_bar_here"],
    "baz" => $_POST["field_name_baz_here"]
);



function wp_podio_wrapper($option, $fields) {

    // Authenticate your Application:
    Podio::authenticate_with_app('PODIO_APP_ID', 'PODIO_APP_TOKEN');

    // You can create a new item
    switch ($option) {
    
        case 'create':
            PodioItem::create('PODIO_APP_TOKEN', array('fields' => $fields));
            break;

        case 'update':
            PodioItem::update('PODIO_APP_TOKEN', array('fields' => $fields));
            break;
            
    }
}

add_action('wp_podio_wrapper', 'wp_podio_wrapper', 10, 2);

// Usage: do_action('wp_podio_wrapper', 'create', $podio_fields);

