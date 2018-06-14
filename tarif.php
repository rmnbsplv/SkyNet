<?php

require(__DIR__ . '/f/tarifs.php');

$data = json_decode(file_get_contents("http://sknt.ru/job/frontend/data.json"), true);
$tarifs = $data["tarifs"];
$class_tarifs = new Tarifs;


$tarifs_group =  $_POST["tarifs_group"];


$pay_period = $_POST["pay_period"];
$pay_period_month = $_POST["pay_period_month"];
$title = $_POST["title"];
$price_per_month = $_POST["price_per_month"];
$price = $_POST["price"];
$new_payday = $_POST['new_payday'];
$date = date("m.d.Y", $new_payday);


require('f/screen_3.php');

?>