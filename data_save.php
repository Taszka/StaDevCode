<?php 
session_start();
$building_heated_floors = $_POST['building_heated_floors'];
$floor_height = $_POST['floor_height'];
$building_roof = $_POST['building_roof'];
$has_basement = $_POST['has_basement'];
$has_balcony = $_POST['has_balcony'];
$wall_size = $_POST['wall_size'];
$number_doors = $_POST['number_doors'];
$doors_type = $_POST['doors_type'];
$number_balcony_doors = $_POST['number_balcony_doors'];
$number_windows = $_POST['number_windows'];
$number_huge_windows = $_POST['number_huge_windows'];


$_SESSION['building_heated_floors'] = $building_heated_floors;
$_SESSION['floor_height'] = $floor_height;
$_SESSION['building_roof'] = $building_roof;
$_SESSION['has_basement'] = $has_basement;
$_SESSION['has_balcony'] = $has_balcony;
$_SESSION['wall_size'] = $wall_size;
$_SESSION['number_doors'] = $number_doors;
$_SESSION['doors_type'] = $doors_type;
$_SESSION['number_balcony_doors'] = $number_balcony_doors;
$_SESSION['number_windows'] = $number_windows;
$_SESSION['number_huge_windows'] = $number_huge_windows;

header("Location: /php1/ask_step2.php");
exit();
?>
