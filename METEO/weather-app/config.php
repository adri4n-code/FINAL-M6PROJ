<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('81496092084-po3bkqs5hvh24p1obnts5s0r4kofjr7l.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');


//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/METEO/weather-app/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>