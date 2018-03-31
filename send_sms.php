<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// Account SID and Auth Token from twilio.com/console
// Environment variables set in .env file
$account_sid = getenv('account_sid');
$auth_token = getenv('auth_token');

// My Twilio Number
$twilio_number = getenv('twilio_number');

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // SMS recipient number
    //getenv('recipient_number'),
    $argv[1],
    array(
        'from' => $twilio_number,
        'body' => "A message from Vivek via Twilio's PHP SDK: https://www.twilio.com",
        'provideFeedback' => true,
        'statusCallback' => "https://requestb.in/se466qse",
        'mediaURL' => 'http://thezeninyou.com/wp-content/uploads/2014/04/Zen-1024x576.jpeg'
    )
);
?>