<html>
    <head>
        <link rel="icon" href="logo.png">
        <title>Czas pociagow</title>
    </head>
    <body>
    <div id="high" style="display:flex;">
    <img src="logo.png" width="70px" height="90px" style="margin-left: 0;">
    <a href="showtab.php" id="forad" class="options">TABELA</a>
    <a href="index.php" id="logow" class="options">LOGOWANIE</a>
    <a href="account.php" id="acc" class="options">KONTA</a>
    <a href="add.php" id="acc" class="options">DODAJ DANE</a>
    <span style="margin-left:20%;"></span>
    <img src="logo.png" width="70px" height="90px">
    </div>
    <br><br>
<table width = "100%">
    <tr id="glowa" style="color: white; background-color:rgb(34, 40, 49);">
        <td width="10%"> imie </td>
        <td width="80%"> komentarz </td>
        <td width="10%"> opcje </td>
    </tr>
<?php
$link=mysqli_connect("localhost", "root", "", "train");
if($link){
    $result = mysqli_query($link, "SELECT * FROM forum;");
    while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $content = $row["content"];
        echo '
        <tr id="tresc">
        <td width="10%">' .$name. '</td>
        <td width="80%">' .$content. '</td>
        <td width = "10%"><a href="deletef.php?id='.$id.'" style="color:black;"> delete </a> 
        </td>   
        </tr>
    ';
}
}
?>
</table>
<style>
     *{
        padding: 0;
        margin: 0;
    }
    #high{
        background-color: black;
    }
    .options{
        margin-left: 10%;
        color: white;
        font-size: x-large;
        text-decoration: none;
        margin-top: 1.5%;
    }
    .options:hover{
        color: grey;
    }
table{
    text-align: center;
    color: white;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
}
    a{
    color:white;
    text-align:center;
    text-decoration: none;
}
body{
    background-color: grey;
}
#tresc{
    color:black; 
    text-decoration: none;
    background-color: rgb(238, 238, 238);
    }
#tresc:hover{
    background-color: rgb(155, 164, 181);
}
</style>
</body>
</html>