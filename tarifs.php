<?php

require(__DIR__ . '/f/tarifs.php');

$data = json_decode(file_get_contents("http://sknt.ru/job/frontend/data.json"), true);
$tarifs = $data["tarifs"];
$class_tarifs = new Tarifs;


$tarifs_group =  $_POST["tarifs_group"];


print_r($class_tarifs->TarifsSubGroups($tarifs_group));

?>