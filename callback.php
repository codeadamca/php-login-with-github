<?php

session_start();

include('env.php');

if(!isset($_GET['code']) || isset($_GET['error']))
{
    die('Error!');
}

// Switch the tempoary code for a permanant one
$url = 'https://github.com/login/oauth/access_token';
$data = [
    'client_id' => GITHUB_CLIENT_ID,
    'client_secret' => GITHUB_CLIENT_SECRET,
    'code' => $_GET['code'],
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);
curl_close($ch);

parse_str($result, $_SESSION);

header('Location: display.php');