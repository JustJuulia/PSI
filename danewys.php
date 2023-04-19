<?php
$link=mysqli_connect("localhost", "root", "", "train");
if($link){
    $numerpoc=$_POST["numerpoc"];
    $nazwiskomasz=$_POST["nazwiskomasz"];
    $dataodj=$_POST["dataodj"];
    $szacunkowyczasdoj=$_POST["szacunkowyczasdoj"];
    $opoznieniewmin=$_POST["opoznieniewmin"];
    $nazwaprzew = $_POST["nazwaprzew"];
    $sql = ("INSERT INTO main VALUES(NULL, current_timestamp(), '$numerpoc', '$nazwiskomasz', '$dataodj', '$szacunkowyczasdoj', '$opoznieniewmin', '$nazwaprzew');");
    mysqli_query($link, $sql);
    echo'<a href="showtab.php"> strona glowna </a>';
}
?>