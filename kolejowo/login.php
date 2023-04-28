<?php 
session_start();
if(isset($_POST["name"]) && isset($_POST["pass"])){
    $login=$_POST["name"];
    $pass=$_POST["pass"];
    $con=mysqli_connect("localhost", "root", "", "train");
    if($con){
        $res=mysqli_query($con, "SELECT * FROM logins
										WHERE
											name='$login'
										AND
											password='$pass'
                                        AND 
                                            admin = 1");
        if (mysqli_num_rows($res) > 0){
        $_SESSION["logged_in"] = 1;
        $_SESSION["login"] = $_POST["name"];
        header("Location: http://localhost/pociagi/showtab.php");
        die();
        }
        else{
            $tes=mysqli_query($con, "SELECT * FROM logins
										WHERE
											name='$login'
										AND
											password='$pass'
                                        AND 
                                            admin = 0");
            if (mysqli_num_rows($tes) > 0){
                $_SESSION["logged_in"] = 1;
                $_SESSION["login"] = $_POST["name"];
                header("Location: http://localhost/pociagi/showtabus.php");
                die();
                }
            else{
                echo " niepoprawny login
                <a href=index.php> logowanie </a>";

            }
        }
        
    }
}