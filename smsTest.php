<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACc495d0b8f0577c4253f409cb805ac88b';
$token = '7cbed27097ba7514fc579a46a349aea2';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+919016353443',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+12316245678',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    ]
);
