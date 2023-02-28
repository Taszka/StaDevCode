<!DOCTYPE html>
<html lang="pl">
<head>
<?php 
session_start();
?>
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
    <subject><h1>Ankieta Grzewcza</h1><br><h6>Dane dodatkowe</h6></subject>
    <form action="data_output.php" method="post">


    <?php
    $include_hot_water = $_SESSION['include_hot_water'];
    if ($include_hot_water == "True"): ?>

    <ask>Liczba osób korzystająca z ciepłej wody użytkowej(CWU): 
        <input type="number"
        id="personwater"
        name = "include_hot_water">
        </input>
    </ask>
    <ask>Intensywność wykorzystania ciepłej wody użytkowej(CWU): 
        <select id="CWU"
        name="hot_water_usage">
        <option value="shower">Tylko prysznice</option>
        <option value="shower_bath">Głównie prysznice, czasem wanna</option>
        <option value="bath">Tylko wanna</option>
    </select>
    </ask>

    <?php else: ?>
    |
    <?php endif ?>







    <?php
    $construction_type = $_SESSION['construction_type'];
    if ($construction_type == "traditional"): ?>

    <ask>
        Rodzaj materiału ścian:
        <select 
        id="calculation_primary_wall_material" 
        name="primary_wall_material">
            <option value=""></option>
            <option value="51">Beton</option>
            <option value="54">Beton komórkowy</option>
            <option value="96">Bloczek silikatowy</option>
            <option value="58">Cegła dziurawka</option>
            <option value="62">Cegła klinkierowa</option>
            <option value="59">Cegła kratówka</option>
            <option value="57">Cegła pełna</option>
            <option value="61">Cegła silikatowa dziurawka</option>
            <option value="60">Cegła silikatowa pełna</option>
            <option value="98">Celuloza</option>
            <option value="56">Drewno iglaste</option>
            <option value="55">Drewno liściaste</option>
            <option value="93">Glina</option>
            <option value="77">Granit</option>
            <option value="76">Kamień polny</option>
            <option value="97">Keramzytobeton</option>
            <option value="78">Marmur</option>
            <option value="79">Piaskowiec</option>
            <option value="95">PIR</option>
            <option value="84">Porotherm</option>
            <option value="86">PUR</option>
            <option value="85">Pustak keramzytowy</option>
            <option value="53">Pustak żużlobetonowy</option>
            <option value="63">Pustaki ceramiczne</option>
            <option value="70">Styropian</option>
            <option value="88">Styropian grafitowy</option>
            <option value="71">Styropian twardy (XPS)</option>
            <option value="90">Termalica 300/400</option>
            <option value="91">Termalica 600/650</option>
            <option value="92">Thermomur</option>
            <option value="80">Wapień</option>
            <option value="94">Wełna drzewna</option>
            <option value="68">Wełna mineralna</option>
            <option value="83">Wiórobeton</option>
            <option value="89">Ytong</option>
            <option value="52">Żelbet</option>
        
        </select>

    </ask>

    <?php else: ?>
    |
    <?php endif ?>








    <?php
    $construction_type = $_SESSION['construction_type'];
    if ($construction_type == "canadian"): ?>

    <ask>
        Rodzaj materiału izolacji:
        <select 
        id="calculation_primary_isolation_material" 
        name="primary_wall_isolation_material">
        <option value="51">Beton</option>
        <option value="54">Beton komórkowy</option>
        <option value="96">Bloczek silikatowy</option>
        <option value="58">Cegła dziurawka</option>
        <option value="62">Cegła klinkierowa</option>
        <option value="59">Cegła kratówka</option>
        <option value="57">Cegła pełna</option>
        <option value="61">Cegła silikatowa dziurawka</option>
        <option value="60">Cegła silikatowa pełna</option>
        <option value="98">Celuloza</option>
        <option value="56">Drewno iglaste</option>
        <option value="55">Drewno liściaste</option>
        <option value="93">Glina</option>
        <option value="77">Granit</option>
        <option value="76">Kamień polny</option>
        <option value="97">Keramzytobeton</option>
        <option value="78">Marmur</option>
        <option value="79">Piaskowiec</option>
        <option value="95">PIR</option>
        <option value="84">Porotherm</option>
        <option value="86">PUR</option>
        <option value="85">Pustak keramzytowy</option>
        <option value="53">Pustak żużlobetonowy</option>
        <option value="63">Pustaki ceramiczne</option>
        <option value="70">Styropian</option>
        <option value="88">Styropian grafitowy</option>
        <option value="71">Styropian twardy (XPS)</option>
        <option value="90">Termalica 300/400</option>
        <option value="91">Termalica 600/650</option>
        <option value="92">Thermomur</option>
        <option value="80">Wapień</option>
        <option value="94">Wełna drzewna</option>
        <option value="68">Wełna mineralna</option>
        <option value="83">Wiórobeton</option>
        <option value="89">Ytong</option>
        <option value="52">Żelbet</option>
        </select>

    </ask>
    <ask>Grubość wewnętrznej warstwy<br> izolacji w ścianie zewnętrznej: 
        <input type="number"
        id="wallcm"
        name = "internal_wall_isolation_size">
        </input>
        Cm
    </ask>
    <?php else: ?>
    |
    <?php endif ?>

    <?php
    $building_type = $_SESSION['building_type'];
    if ($building_type == "apartament"): ?>

    <ask>Co znajduje się poniżej mieszkania?<br>  
    <select 
        id="calculation_primary_isolation_material" 
        name="whats_under">
        <option value="heated_room">Ogrzewany lokal</option>
        <option value="unheated_room">Nieogrzewany lokal</option>
        <option value="outdoor">Świat zewnętrzny</option>
        <option value="ground">Grunt</option>
    </select>
    </ask>


    <ask>	Co znajduje się w sąsiedztwie <br>
     mieszkania – z każdej z czterech stron osobno? 
     <br>
     <select 
        id="calculation_primary_isolation_material" 
        name="whats_north">
        <option value="heated_room">Ogrzewany lokal</option>
        <option value="unheated_room">Nieogrzewany lokal</option>
        <option value="outdoor">Świat zewnętrzny</option>
        <option value="ground">Grunt</option>
    </select>
    <br>
    <select 
        id="calculation_primary_isolation_material" 
        name="whats_east">
        <option value="heated_room">Ogrzewany lokal</option>
        <option value="unheated_room">Nieogrzewany lokal</option>
        <option value="outdoor">Świat zewnętrzny</option>
        <option value="ground">Grunt</option>
    </select>
    <br>
    <select 
        id="calculation_primary_isolation_material" 
        name="whats_south">
        <option value="heated_room">Ogrzewany lokal</option>
        <option value="unheated_room">Nieogrzewany lokal</option>
        <option value="outdoor">Świat zewnętrzny</option>
        <option value="ground">Grunt</option>
    </select>
    <br>
    <select 
        id="calculation_primary_isolation_material" 
        name="whats_west">
        <option value="heated_room">Ogrzewany lokal</option>
        <option value="unheated_room">Nieogrzewany lokal</option>
        <option value="outdoor">Świat zewnętrzny</option>
        <option value="ground">Grunt</option>
    </select>
    </ask>
    <?php else: ?>
    |
    <?php endif ?>


    <?php
    $building_type = $_SESSION['building_type'];
    if ($building_type == "row_house"): ?>

    <ask>Czy segment w zabudowie szeregowej znajduje się na<br>
     końcu/początku szeregu?
        <select id="decision"
        name="on_corner">
            <option value="False">Nie</option>
            <option value="True">Tak</option>
            </option>
        </select>
    </ask>

    <?php else: ?>
    |
    <?php endif ?>




    <send_button>   
        <input
        type="submit" 
        value="Wyślij dane" />
    </send_button>

    </form>

</ask_container>

<blank_wall>
</blank_wall>

<blank_header>
</blank_header>

<blank_footer>
</blank_footer>

</body>
</html>