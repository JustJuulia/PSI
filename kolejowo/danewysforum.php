<?php
session_start();
$link=mysqli_connect("localhost", "root", "", "train");
if($link){
    $name=$_SESSION["login"];
    $content = $_POST["content"];
    $sql = ("INSERT INTO forum VALUES(NULL, '$name', '$content');");
    mysqli_query($link, $sql);
    echo'<a href="forum.php"> forum </a>
    <br>
    <a href="showtabus.php"> strona glowa </a>';
}
?>