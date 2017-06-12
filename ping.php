<?php

require_once('config.php');

validate_secret();

$body = array_key_exists('body', $_GET) ? $_GET['body'] : '';

if(!is_string($body) || strlen($body) == 0) {
  halt_for_usage('/ping.php?body=Whatever%20the%20server%20needs%20to%20return');
}

echo $body;
