<?php
// ? $_GLOBALS $_SERVER $_GET $_POST $_REQUEST
// ? GLOBAL VARIABLES
$name = 'Yae';

function greet() {
  echo 'hELLO '. $GLOBALS['name'];
} 

// greet();

// SERVER
// echo '<pre>';
// echo print_r($_SERVER, true); 
// echo '</pre>';

// echo '<pre>'. print_r($_SERVER, true). '</pre>';

echo $_SERVER['QUERY_STRING'];

// ? ** IMPORTANT METHODS
// * ['QUERY_STRING']
// * [SCRIPT_FILENAME] => /home/yae/HIT/php/index.php
// * [PHP_SELF] => /index.php
// [DOCUMENT_ROOT] => /home/yae/HIT/php
// [REMOTE_ADDR] => 127.0.0.1
// [REMOTE_PORT] => 36184
// [SERVER_SOFTWARE] => PHP 8.1.2-1ubuntu2.14 Development Server
// [SERVER_PROTOCOL] => HTTP/1.1
// [SERVER_NAME] => localhost
// [SERVER_PORT] => 8000
// [REQUEST_URI] => /
// [REQUEST_METHOD] => GET
// [SCRIPT_NAME] => /index.php
// [HTTP_HOST] => localhost:8000
// [HTTP_CONNECTION] => keep-alive
// [HTTP_CACHE_CONTROL] => max-age=0
// [HTTP_SEC_CH_UA] => "Not_A Brand";v="8", "Chromium";v="120", "Google Chrome";v="120"
// [HTTP_SEC_CH_UA_MOBILE] => ?0
// [HTTP_SEC_CH_UA_PLATFORM] => "Linux"
// [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
// [HTTP_USER_AGENT] => Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36
// [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
// [HTTP_SEC_FETCH_SITE] => none
// [HTTP_SEC_FETCH_MODE] => navigate
// [HTTP_SEC_FETCH_USER] => ?1
// [HTTP_SEC_FETCH_DEST] => document
// [HTTP_ACCEPT_ENCODING] => gzip, deflate, br
// [HTTP_ACCEPT_LANGUAGE] => en
// [REQUEST_TIME_FLOAT] => 1705131876.7445
// [REQUEST_TIME] => 1705131876