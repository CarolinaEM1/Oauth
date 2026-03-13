<?php
require 'config.php';

$code = $_GET['code'];

$data = [
    'grant_type' => 'authorization_code',
    'code' => $code,
    'redirect_uri' => $spotify_redirect,
    'client_id' => $spotify_client_id,
    'client_secret' => $spotify_client_secret
];

$ch = curl_init("https://accounts.spotify.com/api/token");

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$result = json_decode($response, true);

$token = $result['access_token'];

$ch = curl_init("https://api.spotify.com/v1/me");

curl_setopt($ch, CURLOPT_HTTPHEADER, [
"Authorization: Bearer $token"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$user = json_decode(curl_exec($ch), true);

$_SESSION['user'] = $user['display_name'];

header("Location: dashboard.php");