# Pixabay API PHP Wrapper

This is an unofficial PHP package / wrapper for the [Pixabay RESTful API](http://pixabay.com/api/docs/) for searching and retrieving Pixabay royalty-free, public-domain images. 

[ ![Pixabay](https://github.com/connecteev/pixabay-api-php/assets/64816/77ee98e3-1087-43d8-a339-ff481ebfa8b6) ](http://pixabay.com/)



### Installation

The recommended way to install Pixabay PHP Client is via [Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Pixabay PHP Client:

```bash
composer require connecteev/pixabay-php-api
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

### Documentation

Compatible with PHP versions:
 - 7
 - 8

#### Usage example

```php
<?php

require_once 'vendor/autoload.php';

$pixabayClient = new \Pixabay\PixabayClient([
	'key' => 'your-Pixabay-API-Key'
]);

// test it
$results = $pixabayClient->get(['q' => 'nature'], true);

// show the results
var_dump($results);
```

To obtain your keys go to https://pixabay.com/api/docs/
More information can be found in the online documentation at https://www.zoonman.com/projects/pixabay/

### Credits
I used these 2 packages as a starting point, and owe them a lot of credit.
* https://github.com/zoonman/pixabay-php-api (abandoned)
* https://github.com/ahmetbarut/pixabay-api-php
