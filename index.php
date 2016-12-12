<?php

date_default_timezone_set("America/New_York");

require_once('smarty/libs/Smarty.class.php');
$smarty = new Smarty();

include('destiny_initialize.php');
include('definitions.php');

$destinyINI = new destinyINI();
$startDestiny = $destinyINI->startDestiny("Ry Town");

$manifest = new manifestDeclaration();
$gender_definition = $manifest->getDefinition("DestinyGenderDefinition");

$characters = json_decode(json_encode($startDestiny->Response->data->characters), true);

foreach($characters as $players){
	$characters_group[] = $players;
}

$smarty->assign('characters', $characters_group);

$smarty->display('destiny.html');

?>
