# (fn) WP-Podio [WIP!]

A Simple Wrapper for Podio API Integration with WordPress.

> The main purpose of this tool is not to lay down a connection with the entire Podio API. In short, it's a simple and practical way to provide, through a function, the creation of new items and updating of these items as well using the _Podio-php_ library.
> It's up to you (me) if you want to fork this repository or copy paste at your leisure. :)


## Getting Started

Open the `functions.php` file and:

```php
// 1. Define the API Key:
define('PODIO_CLIENT_ID', 'YOUR_ID_GOES_HERE');
define('PODIO_CLIENT_SECRET', 'YOUR_SECRET_GOES_HERE');

// 2. Define the App ID:
define('PODIO_APP_ID', 'YOUR_APP_ID_GOES_HERE');

// 3. Define the App Token:
define('PODIO_APP_TOKEN', 'YOUR_APP_TOKEN_GOES_HERE');

// 4. Define the list of fields to work with:
$podio_fields = array(
    "foo" => $_POST["field_name_foo_here"],
    "bar" => $_POST["field_name_bar_here"],
    "baz" => $_POST["field_name_baz_here"]
);
```

Then place the do_action() hook wherever you need it for:

```php
// Create a new item:
do_action('wp_podio_wrapper', 'create', $podio_fields);

// OR update an existing one:
do_action('wp_podio_wrapper', 'update', $podio_fields);
```

## Options

### `create`

```php
do_action('wp_podio_wrapper', 'create', $podio_fields_to_create);
```

### `update`

```php
do_action('wp_podio_wrapper', 'update', $podio_fields_to_update);
```


## Example

### Inside your `functions.php`

```php
// Setup your Application
define('PODIO_CLIENT_ID', 'userfoobarbaz');
define('PODIO_CLIENT_SECRET', 'nobodyknows');
define('PODIO_APP_ID', '123456');
define('PODIO_APP_TOKEN', '987xwy987xwy987xwy');

// And declare your fields
$podio_fields = array(
    "foo" => $_POST["field_name_foo_here"],
    "bar" => $_POST["field_name_bar_here"],
    "baz" => $_POST["field_name_baz_here"]
);
```

### Then call the do_action() hook wherever you need it for create a new item:

```php
do_action('wp_podio_wrapper', 'create', $podio_fields);
```


## License

[MIT License](http://vitorbritto.mit-license.org/) © Vitor Britto
