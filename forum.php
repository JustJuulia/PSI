<html>
    <head>
        <link rel="icon" href="logo.png">
        <title>Czas pociagow</title>
    </head>
    <body>
        <div id="dodawaniekomdiv">
<form action="danewysforum.php" method="post">
        <input type="text" name="content" id="kom">
        <input type="submit" name="submit" value="dodaj to!" id="adding">
</form>
</div>
<table width = "100%">
    <tr id="glowa" style="color: black;">
    <td width="10%"> imie </td>
    <td width="90%"> komentarz </td>
    </tr>
<?php
$link=mysqli_connect("localhost", "root", "", "train");
if($link){
    $result = mysqli_query($link, "SELECT * FROM forum;");
    echo '<table width = "100%">';
    while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $name = $row["name"];
    $content = $row["content"];
        echo '
        <tr>
        <td width="10%">' .$name. '</td>
        <td width="90%">' .$content. '</td>
        </tr>
    ';
}
}
?>
</table>
<a href="showtabus.php" class="nextpage">strona glowna</a>
<br>
<br>
<a href="index.html" class="nextpage" id="logowanie">logowanie</a>
<style>
#dodawaniekomdiv{
    display: flex;
}
#adding{
    color: white;
    background-color:rgba(137,2,62,1) ;
    width: 70px;
    height: 40px;
    border: none;
    font-size: 15px;
    border-radius: 10%;
}
    #logowanie{
    margin-left: 52%;
}
.nextpage{
    font-size: larger;
    color: black;
    text-align: center;
    text-decoration: none;
    margin-left: 51%;
    background-color: rgba(255,217,218,1);
}
    *{
    margin: 0 ;
    padding: 0 ;
    }
table{
    text-align: center;
    color: white;
    background: rgb(255,217,218);
    background: linear-gradient(180deg, rgba(255,217,218,1) 2%, rgba(204,113,120,1) 50%, rgba(137,2,62,1) 100%);
    border-collapse: collapse;
}
#glowa{
    background: rgb(255,217,218);
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
</style>
</body>
</html>