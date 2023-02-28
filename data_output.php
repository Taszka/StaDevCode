<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="pl">
<head>
<title>Ankieta</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
<style>
* {
    box-sizing: border-box;
    margin: 0px;
}

body {
    font-family: "Rubik";
}

/* Style the header */
header {
    background-color: #6464db;
    height: 60px;
    padding: 5px;
    text-align: left;
    font-size: 13px;
    color: rgb(255, 255, 255);
}

blank_header {
    float: left;
    background-color: #e4e4e4;
    height: 33px;
    width: 100%;
    color: white;
}
blank_wall {
    float: left;
    width: 30%;
    height: 720px; 
    background: #e4e4e4;
    padding: 20px;
}
ask_container {
    float: left;
    background-color: #ffffff;
    padding: 15px;
    height: 720px;
    width: 40%;
    color: rgb(0, 0, 0);
}
subject {
    float: left;
    background-color: #ffffff;
    padding: 15px;
    height: 85px;
    width: 100%;
    color: rgb(0, 0, 0);
}
ask {
    float: left;
    background-color: #ffffff;
    padding: 15px;
    height: auto;
    width: 100%;
    color: rgb(0, 0, 0);
}
blank_footer {
    float: left;
    background-color: #969494;
    height: 100px;
    width: 100%;
    color: white;
}
send_button {
    float: right;
    background-color: #ffffff;
    height: auto;
    width: 100%;
    color: rgb(0, 0, 0);
    text-align: right;
}

</style>
</head>
<body>


<header>
</header>

<blank_header>
</blank_header>

<blank_wall>
</blank_wall>



<ask_container>
    <subject><h1>Ankieta Grzewcza</h1><br><h6>Dane wymagane</h6></subject>
    <?php
    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    ?>
</ask_container>

<blank_wall>
</blank_wall>

<blank_header>
</blank_header>

<blank_footer>
</blank_footer>

</body>
</html>