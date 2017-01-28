<meta charset="UTF-8">
<?php 
$steamid64 = $_GET['s64'];

//Sacar Nombre de Usuario de SteamID64
$xml_steam = simplexml_load_file('http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=9B03A3E22841A0B34375789454265C12&steamids='.$steamid64.'&format=xml');
$nombre_user = $xml_steam->players->player->personaname;
//FIN Sacar Nombre de Usuario de SteamID64

print $nombre_user;

?>