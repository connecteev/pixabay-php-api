<?php
/**
 * pixabay-php-api
 * index.php
 *
 * PHP Version 5
 *
 * @category Production
 * @package  Default
 * @author   Philipp Tkachev <zoonman@gmail.com>
 * @date     12/14/14 9:58 AM
 * @license  https://www.zoonman.com/projects/pixabay/license.txt MIT
 * @version  GIT: 1.0
 * @link     https://www.zoonman.com/projects/pixabay/
 */

// show all possible errors
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once '../src/Pixabay/PixabayClient.php';

// Obtain key on https://pixabay.com/api/docs/
$pixabayClient = new \Pixabay\PixabayClient(array(
    'key' => 'Your API key'
));

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
echo json_encode($results);
