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

// test it out
$results = $pixabayClient->get(['q' => 'nature'], true);

// alternatively (for images)
$results = $pixabayClient->getImages(['q' => 'nature'], true);

// with multiple options / parameters (for image search). For a comprehensive list, see https://pixabay.com/api/docs/#api_search_images
$results = $pixabayClient
	->getImages([
		'q' => 'nature', // A URL encoded search term. If omitted, all images are returned. This value may not exceed 100 characters. Example: "yellow+flower"
		'lang' => 'en', // Language code of the language to be searched in. Accepted values: cs, da, de, en, es, fr, id, it, hu, nl, no, pl, pt, ro, sk, fi, sv, tr, vi, th, bg, ru, el, ja, ko, zh. Default: "en"
		'image_type' => 'illustration', // Filter results by image type. Accepted values: "all", "photo", "illustration", "vector". Default: "all"
		'orientation' => 'horizontal', // Whether an image is wider than it is tall, or taller than it is wide. Accepted values: "all", "horizontal", "vertical". Default: "all"
		'category' => '', // Filter results by category. Accepted values: backgrounds, fashion, nature, science, education, feelings, health, people, religion, places, animals, industry, computer, food, sports, transportation, travel, buildings, business, music
		'min_width' => '0', // Minimum image width. Default: "0"
		'min_height' => '0', // Minimum image height. Default: "0"
		'colors' => 'grayscale,transparent', // Filter images by color properties. A comma separated list of values may be used to select multiple properties. Accepted values: "grayscale", "transparent", "red", "orange", "yellow", "green", "turquoise", "blue", "lilac", "pink", "white", "gray", "black", "brown
		'editors_choice' => "false", // Select images that have received an Editor's Choice award. Accepted values: "true", "false". Default: "false"
		'safesearch' => "true", // A flag indicating that only images suitable for all ages should be returned. Accepted values: "true", "false". Default: "false"
		'order' => 'popular', // How the results should be ordered. Accepted values: "popular", "latest". Default: "popular"
		'page' => 1, // Returned search results are paginated. Use this parameter to select the page number. Default: 1
		'per_page' => 200, // Determine the number of results per page. Accepted values: 3 - 200. Default: 20
	],true);

// with multiple options / parameters (for video search). For a comprehensive list, see https://pixabay.com/api/docs/#api_search_videos
$results = $pixabayClient
	->getVideos([
		'q' => 'nature', // A URL encoded search term. If omitted, all videos are returned. This value may not exceed 100 characters. Example: "yellow+flower"
		'lang' => 'en', // Language code of the language to be searched in. Accepted values: cs, da, de, en, es, fr, id, it, hu, nl, no, pl, pt, ro, sk, fi, sv, tr, vi, th, bg, ru, el, ja, ko, zh. Default: "en"
		'video_type' => 'animation', // Filter results by video type. Accepted values: "all", "film", "animation". Default: "all"
		'category' => '', // Filter results by category. Accepted values: backgrounds, fashion, nature, science, education, feelings, health, people, religion, places, animals, industry, computer, food, sports, transportation, travel, buildings, business, music
		'min_width' => '0', // Minimum video width. Default: "0"
		'min_height' => '0', // Minimum video height. Default: "0"
		'editors_choice' => "false", // Select videos that have received an Editor's Choice award. Accepted values: "true", "false". Default: "false"
		'safesearch' => "true", // A flag indicating that only videos suitable for all ages should be returned. Accepted values: "true", "false". Default: "false"
		'order' => 'popular', // How the results should be ordered. Accepted values: "popular", "latest". Default: "popular"
		'page' => 1, // Returned search results are paginated. Use this parameter to select the page number. Default: 1
		'per_page' => 200, // Determine the number of results per page. Accepted values: 3 - 200. Default: 20
	],true);


// show the results
var_dump($results);
```

To obtain your keys go to https://pixabay.com/api/docs/
More information can be found in the online documentation at https://www.zoonman.com/projects/pixabay/

### Credits
I used these 2 packages as a starting point, and owe them a lot of credit.
* https://github.com/zoonman/pixabay-php-api (abandoned)
* https://github.com/ahmetbarut/pixabay-api-php
