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
<subject><h1>Ankieta Grzewcza</h1><br><h6>Dane wymagane</h6></subject>
<form action="data_save_step2.php" method="post">
    <ask>Rodzaj okien:
    <select id="windowsgender"
        name="windows_type">
          <option value="old_single_glass">Stare z pojedyńczą szybą</option>
          <option value="old_dobule_glass">Stare z min. dwiema szybami</option>
          <option value="semi_new_double_glass">Starsze (10+lat) ale z szybami zespolonymi</option>
          <option value="new_dobule_glass">Współczesne dwuszybowe</option>
          <option value="new_triple_glass">Współczesne trójszybowe</option>
        </select>
    </ask>

    <ask>Średnia dobowa temperatura <br>w pomieszczeniach ogrzewanych zimą: 
        <input type="number"
        id="indoor_temperature"
        name = "indoor_temperature">
        </input>
    </ask>

    <ask>Rodzaj wentylacji:
    <select id="vent"
        name="ventilation_type">
          <option value="natural">Naturalna lub grawitacyjna</option>
          <option value="mechanical">Mechaniczne</option>
          <option value="mechanical_recovery">Mechaniczne z odzyskiem ciepła</option>
        </select>
    </ask>

    <ask>Czy wyliczamy dodatkową moc na potrzeby <br>podgrzewania ciepłej wody użytkowej(CWU)?
        <select id="decision"
        name="include_hot_water">
            <option value="False">Nie</option>
            <option value="True">Tak</option>
            </option>
        </select>
    </ask>
    <ask>
        Rodzaj domu:
        <select id="housegender"
        name="building_type">
            <option value="single_house">Dom jednorodzinny wolnostojący</option>
            <option value="dobule_house">Zabudowa bliźniacza</option>
            <option value="row_house">Dom w zabudowie szeregowej</option>
            <option value="apartament">Mieszkanie</option>
        </select>
    </ask>
    <ask>
        Lata budowy domu
        <select id="calculation_construction_year" name="construction_year">
        <option value="2021">lata 2021+</option>
        <option value="2011">lata 2011 – 2020</option>
        <option value="2000">lata 2000 – 2010</option>
        <option value="1990">lata 90-te</option>
        <option value="1980">lata 80-te</option>
        <option value="1970">lata 70-te</option>
        <option value="1960">lata 60-te</option>
        <option value="1950">lata 50-te</option>
        <option value="1940">lata 40-te</option>
        <option value="1939">gdzieś przed II wojną</option>
        <option value="1914">gdzieś przed I wojną</option>
        </select>
    </ask>
    <ask>
        Rodzaj konstrukcji
        <select id="calculation_construction_year" name="construction_type">
        <option value="traditional">Budynek tradycyjny, murowany lub z drewna</option>
        <option value="canadian">Dom szkieletowy</option>
        </select>
    </ask>
    <ask>Szerokość geograficzna położenia domu: 
        <input 
        type="number"
        id="Latitude"
        name = "latitude">
        </input>
    </ask>
    <ask>Długość geograficzna położenia domu: 
        <input 
        type="number"
        id="Longitude"
        name = "longitude">
        </input>
    </ask>


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