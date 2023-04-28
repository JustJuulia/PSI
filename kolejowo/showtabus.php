<!DOCTYPE html>
<html lang="pl">
    <head>
    <link rel="icon" href="logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Czas pociagow</title>
    </head>
    <body>
    <div id="high" style="display:flex;">
    <img src="logo.png" width="70px" height="90px" style="margin-left: 0;">
    <a href="forum.php" id="forad" class="options" style="margin-left: 20%;">FORUM</a>
    <a href="index.php" id="logow" class="options" style="margin-left: 20%;">LOGOWANIE</a>
    </div>
    <br><br>
        <table width="100%">
            <thead style="background-color: rgb(34, 40, 49); color: white">
            <tr>
            <th width = "15%">data wprowadzenia</th>
            <th width = "5%">numer pociagu</th>
            <th width = "10%">nazwisko maszynisty</th>
            <th width = "20%">data odjazdu</th>
            <th width = "20%">szacunkowy czas dojazdu</th>
            <th width = "10%">opoznienie w minutach</th>
            <th width = "10%">nazwa przewoznika</th>
            </tr>
            </thead>
            <?php 
            include("mainpageg.php")
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
    body{
    background-color: grey;
}   
                table{
                    background: rgb(51,109,177);
                    background: linear-gradient(0deg, rgba(51,109,177,1) 0%, rgba(91,204,150,1) 100%);
                    border: none;
                    border-collapse: collapse;
                }
            </style>
    </body>
</html>
