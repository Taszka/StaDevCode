<!DOCTYPE html>
<html lang="pl">
<head>
<?php 
session_destroy();
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
    <form action="data_save.php" method="post">
    <ask>Liczba ogrzewanych kondygnacji:
        <select id="number_of_heated_floors"
        name="building_heated_floors">
          <option value=0>0</option>
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
        </select>
    </ask>
    <ask>Wysokość pięter przeważająca w budynku:        
        <select id="height"
        name="floor_height">
          <option value=2,3>2,3</option>
          <option value=2,6>2,6</option>
          <option value=3,1>3,1</option>
          <option value=4,1>4,1</option>
        </select> metra wysokości
    </ask>
    <ask>Rodzaj dachu: 
    <select id="roof"
    name="building_roof">
      <option value="flaat">Płaski</option>
      <option value="oblique">Skośny bez poddasza</option>
      <option value="Steep">Skośny z pełnowymiarowym poddaszem</option>
    </select>
    </ask>

    <ask>Czy budynek posiada piwnicę? 
        <select id="basement"
        name="has_basement">
          <option value=true>Tak</option>
          <option value=false>Nie</option>
        </select>
    </ask>
    <ask>Czy budynek posiada piwnicę?
        <select id="balcony"
        name="has_balcony">
          <option value=True>Tak</option>
          <option value=False>Nie</option>
        </select>
    </ask>
    <ask> Całkowita grubość ściany zewnętrznej: 
        <input type="number"
        id="size"
        name = "wall_size">
        </input>
        cm
    </ask>
    <ask> Ilość drzwi zewnętrznych budynku: 
        <input type="number"
        id="numberofdoors"
        name = "number_doors">
        </input>
    </ask>
    <ask> Rodzaj drzwi zewnętrznych: 
        <select id="doorsgender"
        name="doors_type">
          <option value="old_wooden">Stare drewniane</option>
          <option value="old_metal">Stare metalowe</option>
          <option value="new_wooden">Nowe drewniane</option>
          <option value="new_metal">Nowe metalowe</option>
        </select>
    </ask>



    <ask> Ilość drzwi balkonowych budynku: 
        <input type="number"
        id="numberbalconydoors"
        name = "number_balcony_doors">
        </input>
    </ask>
    <ask> Liczba okien w budynku:
        <input type="number"
        id="windows"
        name = "number_windows">
        </input>
        <h6>Typowe okno = ok. 130cm x 150cm</h6>
    </ask>
    <ask> Liczba dużych przeszkleń w budynku:
        <input type="number"
        id="big_windows"
        name = "number_huge_windows">
        </input>
        <h6>Duże przeszklenie = np. 3 x 3m</h6>
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
