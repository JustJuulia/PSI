<?php
$link=mysqli_connect("localhost", "root", "", "train");
if($link){
    $name=$_POST["name"];
    $content = $_POST["content"];
    $sql = ("INSERT INTO forum VALUES(NULL, '$name', '$content');");
    mysqli_query($link, $sql);
    echo'<a href="forum.php"> forum </a>
    <br>
    <a href="showtabus.php"> strona glowa </a>';
}
?>