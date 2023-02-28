<?php 
session_start();
$windows_type = $_POST['windows_type'];
$indoor_temperature = $_POST['indoor_temperature'];
$ventilation_type = $_POST['ventilation_type'];
$include_hot_water = $_POST['include_hot_water'];
$building_type = $_POST['building_type'];

$construction_year = $_POST['construction_year'];
$construction_type = $_POST['construction_type'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];


$_SESSION['building_type'] = $building_type;

$_SESSION['construction_year'] = $construction_year;
$_SESSION['construction_type'] = $construction_type;
$_SESSION['latitude'] = $latitude;
$_SESSION['longitude'] = $longitude;



$_SESSION['windows_type'] = $windows_type;
$_SESSION['indoor_temperature'] = $indoor_temperature;
$_SESSION['ventilation_type'] = $ventilation_type;
$_SESSION['include_hot_water'] = $include_hot_water;

header("Location: /php1/ask_step3.php");
exit();
?>