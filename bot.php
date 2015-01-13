<?php

require_once __DIR__.'/vendor/autoload.php';

const CONSUMER_KEY = '';
const CONSUMER_SECRET = '';
const TOKEN = '';
const TOKEN_SECRET = '';

$client = new TwitterOAuth(
    CONSUMER_KEY,
    CONSUMER_SECRET,
    TOKEN,
    TOKEN_SECRET
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
