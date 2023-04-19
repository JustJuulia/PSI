<html>
    <head>
        <link rel="icon" href="logo.png">
        <title>Czas pociagow</title>
    </head>
    <body>

<table width = "100%">
    <tr id="glowa" style="color: black;">
        <td width="10%"> imie </td>
        <td width="80%"> komentarz </td>
        <td width="10%"> opcje </td>
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
        <td width="80%">' .$content. '</td>
        <td width = "10%"><a href="deletef.php?id='.$id.'"> delete </a> 
        </td>   
        </tr>
    ';
}
}
?>
</table>
<br>
<br>
<a href="showtab.php" class="nextpage">strona glowna</a>
<br>
<br>
<a href="index.html" class="nextpage" id="logowanie">logowanie</a>
<style>
    *{
        margin: 0 ;
    padding: 0;
    }
#logowanie{
    margin-left: 46%;
}
.nextpage{
    font-size: larger;
    color: black;
    text-align: center;
    text-decoration: none;
    margin-left: 45%;
    background-color: rgba(255,217,218,1);
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
</style>
</body>
</html>