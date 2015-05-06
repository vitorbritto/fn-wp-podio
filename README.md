# (fn) WP-Podio [WIP!]

A Simple Wrapper for Podio API Integration with WordPress.

> The main purpose of this tool is not to lay down a connection with the entire Podio API. In short, it's a simple and practical way to provide, through a function, the creation of new items and updating of these items as well using the _Podio-php_ library.
> It's up to you (me) if you want to fork this repository or copy paste at your leisure. :)


## Getting Started

Open the `functions.php` file and:

```

# 1. Define the API Key:
define('PODIO_API_KEY', 'YOUR_API_KEY_GOES_HERE');

# 2. Define the App ID:
define('PODIO_APP_ID', 'YOUR_APP_ID_GOES_HERE');

# 3. Define the App Token:
define('PODIO_APP_TOKEN', 'YOUR_APP_TOKEN_GOES_HERE');

# 4. Define the list of fields to work with:
$podio_fields = array(
    "foo" => $_POST["field_name_foo_here"],
    "bar" => $_POST["field_name_bar_here"],
    "baz" => $_POST["field_name_baz_here"]
);

```


## Example

```
# Setup your Application
define('PODIO_API_KEY', '123abc123abc123abc');
define('PODIO_APP_ID', '123456');
define('PODIO_APP_TOKEN', '987xwy987xwy987xwy');


$podio_fields = array(
    "foo" => $_POST["field_name_foo_here"],
    "bar" => $_POST["field_name_bar_here"],
    "baz" => $_POST["field_name_baz_here"]
);

# Creating a new item:
<?php
    $podio_option = str_replace('"','', "create");
    do_action('wp_podio_wrapper', $podio_option, $podio_fields);
?>

# OR update an existing one
<?php
    $podio_option = str_replace('"','', "update");
    do_action('wp_podio_wrapper', $podio_option, $podio_fields);
?>

```


## License



