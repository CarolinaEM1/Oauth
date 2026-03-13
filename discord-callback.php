<?php
require 'config.php';

$code = $_GET['code'];

$data = [
    'client_id' => $discord_client_id,
    'client_secret' => $discord_client_secret,
    'grant_type' => 'authorization_code',
    'code' => $code,
    'redirect_uri' => $discord_redirect
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://discord.com/api/oauth2/token");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$result = json_decode($response, true);

$access_token = $result['access_token'];

$ch = curl_init("https://discord.com/api/users/@me");

curl_setopt($ch, CURLOPT_HTTPHEADER, [
"Authorization: Bearer $access_token"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$user = json_decode(curl_exec($ch), true);

$_SESSION['user'] = $user['username'];

header("Location: dashboard.php");