<?php
require_once "vendor/autoload.php";
use Twilio\Twiml;

// Set the content-type to XML to send back TwiML from the PHP Helper Library
header("content-type: text/xml");

$response = new Twiml;
$message = $response->message();
$message->body("Indeed. Thats zen right there!");
echo $response;