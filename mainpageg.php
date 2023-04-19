<?php
$link=mysqli_connect("localhost", "root", "", "train");
if($link){
    $result = mysqli_query($link, "SELECT * FROM main ORDER BY opoznieniewmin DESC;");
    echo'        <table width = "100%" id="tresc">';
    while ($row = mysqli_fetch_assoc($result)) {
    $id = $row["id"];
    $datawp = $row["datawp"];
    $numerpoc = $row["numerpoc"];
    $nazwiskomasz = $row["nazwiskomasz"];
    $dataodj = $row["dataodj"];
    $szacunkowyczasdoj = $row["szacunkowyczasdoj"];
    $opoznieniewmin = $row["opoznieniewmin"];
    $nazwaprzew = $row["nazwaprzew"];
        echo '
        <tr>
        <td width="15%">' .$datawp. '</td>
        <td width="5%">' .$numerpoc. '</td>
        <td width="10%">' .$nazwiskomasz. '</td>
        <td width="20%">' .$dataodj. '</td>
        <td width="20%">' .$szacunkowyczasdoj. '</td>
        <td width="10%">' .$opoznieniewmin. '</td>    
        <td width="10%">' .$nazwaprzew. '</td>     
        </tr>';
}
echo'
    </table>
    <style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-color:darkgrey;
    }
    #tresc
    {
    text-align: center;
    background-color: #3C6E71;
    color: white;
    }
    #tresc tr:first-child{
        background-color: #A288E3;
    }
    a{
        color:white;
        text-align:center;

    }
    th, td {
        padding: 10px;
    }
</style>';
}
?>