<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('386750967673-butdrbfb52jv93u6qcejml9ttkbljd8o.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/LOGINGMAIL/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here  