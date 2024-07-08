// Send an SMS using Twilio's REST API and PHP
<?php
// Required if your environment does not handle autoloading
require __DIR__ . '\twilio-php-main\src\Twilio\autoload.php';

// Your Account SID and Auth Token from console.twilio.com
$sid = "AC99f5813b085b762d747a26af19a5eb5d";
$token = "2a125fe0f9022466015276b4c338e97b";
$client = new Twilio\Rest\Client($sid, $token);

// Use the Client to make requests to the Twilio REST API
$client->messages->create(
    // The number you'd like to send the message to
    '+918897009748',
    [
        // A Twilio phone number you purchased at https://console.twilio.com
        'from' => '+12565008226',
        // The body of the text message you'd like to send
        'body' => "Hey Jenny! Good luck on the bar exam!"
    ]
);