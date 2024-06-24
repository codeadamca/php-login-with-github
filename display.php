<?php

session_start();

include('env.php');

// Switch the tempoary code for a permanant one
$url = "https://api.github.com/user/emails";
$headers = [
    'Accept: application/json',
    'Authorization: Bearer '.$_SESSION['access_token'],
    'User-Agent: BrickMMO',
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

print_r($result);
echo '<hr>';

// Switch the tempoary code for a permanant one
$url = "https://api.github.com/user";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

print_r($result);
echo '<hr>';

print_r($headers);