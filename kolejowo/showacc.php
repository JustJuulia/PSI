<?php
$link=mysqli_connect("localhost", "root", "", "train");
if($link){
    $result = mysqli_query($link, "SELECT * FROM logins");
    echo '<table width = "100%" id="tresc" style="margin:auto;">';
    while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $password = $row["password"];
    $admin = $row["admin"];
        echo '
        <tr height="30px">
        <td width="30%">' .$name. '</td>
        <td width="30%">' .$password. '</td>
        <td width="20%">' .$admin. '</td>  
        <td width = "20%"><a href="deletea.php?id='.$id.'" style="color:black; text-decoration: none;"> delete </a>
        <span style="margin: 0 10px;">|</span>
        <a href="giveadmin.php?id='.$id.'" style="color:black; text-decoration: none;">give admin </a>
        <span style="margin: 0 10px;" >|</span>
        <a href="stealadmin.php?id='.$id.'" style="color:black; text-decoration: none;"> steal admin </a></td>   
        </tr>
        <style>
        </style>';
}
}
?>