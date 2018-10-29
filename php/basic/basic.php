<?php

require __DIR__ . '/vendor/autoload.php';

$client = new Raven_Client('http://f0169d5419e44b28b6f4021c1b4c4d90@marksentry.ngrok.io/11');

$error_handler = new Raven_ErrorHandler($client);
$error_handler->registerExceptionHandler();
$error_handler->registerErrorHandler();
$error_handler->registerShutdownFunction();

$client->user_context(array(
    'email' => 'testemail@eamail.com'
));

// Do a dumb
1/0; // throw uncaught error
