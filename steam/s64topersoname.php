<meta charset="UTF-8">
<?php 
$steamid64 = $_GET['s64'];
$steamApiKey = $_GET['apikey'];

//Sacar Nombre de Usuario de SteamID64
$xml_steam = simplexml_load_file('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key='.$steamApiKey.'&steamids='.$steamid64.'&format=xml');
$nombre_user = $xml_steam->players->player->personaname;
//FIN Sacar Nombre de Usuario de SteamID64

print $nombre_user;

?>
