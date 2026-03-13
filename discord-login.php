<?php
require 'config.php';

$url = "https://discord.com/api/oauth2/authorize".
"?client_id=$discord_client_id".
"&redirect_uri=".urlencode($discord_redirect).
"&response_type=code".
"&scope=identify email";

header("Location: $url");
exit();