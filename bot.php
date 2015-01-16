<?php

require_once __DIR__.'/vendor/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

Dotenv::load(__DIR__);

define('CONSUMER_KEY', getenv('CONSUMER_KEY'));
define('CONSUMER_SECRET', getenv('CONSUMER_SECRET'));
define('ACCESS_TOKEN', getenv('ACCESS_TOKEN'));
define('ACCESS_TOKEN_SECRET', getenv('ACCESS_TOKEN_SECRET'));

$client = new TwitterOAuth(
    CONSUMER_KEY,
    CONSUMER_SECRET,
    ACCESS_TOKEN,
    ACCESS_TOKEN_SECRET
);

$deadline = new DateTime('2015-02-09'); // ??
$today = new DateTime(date('Y-m-d'));
$rest_day = $today->diff($deadline)->format('%a日');
$text = '修論提出まであと' . $rest_day . '！！';

// random tweet text with rest time
$tweets = [
    ""
];

$params = [
    'status' => $text . $tweets[array_rand($tweets)]
];

$client->post("statuses/update", $params);
