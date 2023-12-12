<?php
header('Content-Type: application/json; charset=UTF-8; X-Robots-Tag: noindex'); 
echo(json_encode([
	"Status" => "OK",
	"UserInfo" => [
		"UserID" => 1,
		"UserName" => "UsernameHere",
		"RobuxBalance" => 0,
		"TicketsBalance" => 0,
		"IsAnyBuildersClubMember" => false,
		"ThumbnailUrl" => "http://yourthumbnail.here/or_this_can_be_a_blank"
	]
],JSON_UNESCAPED_SLASHES));
?>