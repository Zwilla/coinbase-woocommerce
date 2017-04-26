<?php
//@coauthor      Miguel Padilla (Zwilla) Copyright 2017
if(!function_exists('curl_init')) {
    throw new Exception('The Coinbase client library requires the CURL PHP extension.');
}

require_once __DIR__ . '/Coinbase/Exception.php';
require_once __DIR__ . '/Coinbase/ApiException.php';
require_once __DIR__ . '/Coinbase/ConnectionException.php';
require_once __DIR__ . '/Coinbase/Coinbase.php';
require_once __DIR__ . '/Coinbase/Requestor.php';
require_once __DIR__ . '/Coinbase/Rpc.php';
require_once __DIR__ . '/Coinbase/OAuth.php';
require_once __DIR__ . '/Coinbase/TokensExpiredException.php';
require_once __DIR__ . '/Coinbase/Authentication.php';
require_once __DIR__ . '/Coinbase/SimpleApiKeyAuthentication.php';
require_once __DIR__ . '/Coinbase/OAuthAuthentication.php';
require_once __DIR__ . '/Coinbase/ApiKeyAuthentication.php';
