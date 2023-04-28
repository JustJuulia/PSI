<html>
    <head>
        <link rel="icon" href="logo.png">
        <title>Czas pociagow</title>
    </head>
    <body>
    <div id="high" style="display:flex;">
    <img src="logo.png" width="70px" height="90px" style="margin-left: 0;">
    <a href="showtabus.php" id="forad" class="options" style="margin-left: 20%;">TABELA</a>
    <a href="index.php" id="logow" class="options" style="margin-left: 20%;">LOGOWANIE</a>
    </div>
    <br><br>
        <div id="dodawaniekomdiv">
<form action="danewysforum.php" method="post">
        <input type="text" name="content" id="kom" required="required" ;>
        <input type="submit" name="submit" value="dodaj to!" id="adding">
</form>
</div>
<br><br>
<table width = "100%">
    <tr id="glowa" style="color: white;">
    <td width="10%"> imie </td>
    <td width="90%"> komentarz </td>
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
        <td width="90%">' .$content. '</td>
        </tr>
    ';
}
}
?>
</table>

<style>
#dodawaniekomdiv{
    display: flex;
}
form{
    margin: auto;
}
#adding{
    color: white;
    background-color:rgb(214, 90, 49) ;
    width: 70px;
    height: 40px;
    border: none;
    font-size: 15px;
    border-radius: 10%;
}   
body{
    background-color: grey;
}    
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
    *{
    margin: 0 ;
    padding: 0 ;
    }
table{
    text-align: center;
    color: black;
    border-collapse: collapse;
}
#glowa{
    background: rgb(34, 40, 49);
    color: white;
}
th, td {
    padding: 10px;
}
    a{  
    color:white;
    text-align:center;
    text-decoration: none;
}
input[type = text]{
    width: 700px;
    height: 50px;
    font-family: 'Times New Roman', Times, serif;
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