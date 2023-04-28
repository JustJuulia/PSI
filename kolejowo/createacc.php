<?php 
session_start();
if(isset($_POST["name"]) && isset($_POST["pass"])){
    $login=$_POST["name"];
    $pass=$_POST["pass"];
    $con=mysqli_connect("localhost", "root", "", "train");
    if($con){
        $res=mysqli_query($con, "INSERT INTO `logins`(`name`, `password`, `admin`) VALUES ('$login','$pass', '0')");
        $chec=mysqli_query($con, "SELECT * FROM logins
        WHERE
            name='$login'
        AND
            password='$pass'");
        $all=mysqli_query($con, "SELECT * FROM logins");
        $data = mysqli_fetch_assoc($chec);
        $id = $data['id'];
        if (mysqli_num_rows($all) > 1){
        $_SESSION["logged_in"] = 1;
        $_SESSION["login"] = $_POST["name"];
        header("Location: http://localhost/pociagi/showtabus.php");
        die();
        }
        else if(mysqli_num_rows($all)== 1){
            $upd = mysqli_query($con, "UPDATE `logins` SET `admin`='1' WHERE `id`='$id'");
            $_SESSION["logged_in"] = 1;
            $_SESSION["login"] = $_POST["name"];
            header("Location: http://localhost/pociagi/showtab.php");
            die();
        }
        else{
            echo"zla nazwa uzytkownia/haslo";
        }
        
    }
}