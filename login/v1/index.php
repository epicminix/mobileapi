<?php
setcookie('.ROBLOSECURITY', 'authy', time() + 9999, '/');
header('Content-Type: application/json; charset=UTF-8; X-Robots-Tag: noindex');
echo(json_encode([
  "Status" => "OK",
  "UserInfo" => [
    "userId" => 1,
    "username" => "Usernamehere",
    "RobuxBalance" => 0,
    "IsAnyBuildersClubMember" => false,
    "ThumbnailUrl" => "Thumbnailurlhere"
  ]
],JSON_UNESCAPED_SLASHES));?>
?>
