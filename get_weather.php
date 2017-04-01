<?php
$latitude = $_GET["lat"];
$longitude = $_GET["long"];
$response = file_get_contents('https://api.darksky.net/forecast/84acd3771f143ba49dba75f1abb465ba/'.$latitude.','.$longitude);

echo $response;



?>