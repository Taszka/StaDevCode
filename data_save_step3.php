<?php 
session_start();
$include_hot_water = $_POST['include_hot_water'];
$hot_water_usage = $_POST['hot_water_usage'];
$primary_wall_isolation_material = $_POST['primary_wall_isolation_material'];
$internal_wall_isolation_size = $_POST['internal_wall_isolation_size'];
$whats_under = $_POST['whats_under'];

$whats_north = $_POST['whats_north'];
$whats_east = $_POST['whats_east'];
$whats_south = $_POST['whats_south'];
$whats_west = $_POST['whats_west'];


$on_corner = $_POST['on_corner'];


$_SESSION['include_hot_water'] = $include_hot_water;
$_SESSION['hot_water_usage'] = $hot_water_usage;
$_SESSION['primary_wall_isolation_material'] = $primary_wall_isolation_material;
$_SESSION['internal_wall_isolation_size '] = $internal_wall_isolation_size ;
$_SESSION['whats_under'] = $whats_under;



$_SESSION['whats_north'] = $whats_north;
$_SESSION['whats_east'] = $whats_east;
$_SESSION['whats_south'] = $whats_south;
$_SESSION['whats_west'] = $whats_west;

header("Location: /php1/data_output.php");
exit();
?>