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
    <a href="showtab.php" id="forad" class="options">TABELA</a>
    <a href="index.php" id="logow" class="options">LOGOWANIE</a>
    <a href="forumrad.php" id="acc" class="options">FORUM</a>
    <a href="add.php" id="acc" class="options">DODAJ DANE</a>
    <img src="logo.png" width="70px" height="90px" style="margin-left: 10%;">
    </div>
    <br><br>
        <table width="100%">
            <thead style="background-color: rgb(34, 40, 49); color:white;">
            <tr>
            <th width = "30%">imie</th>
            <th width = "30%">haslo</th>
            <th width="20%">admin</th>
            <th width="20%">opcje</th>
            </tr>
            </thead>
            <tbody width="100%" , id="tresc">
            <?php 
            include("showacc.php")
            ?>
            </tbody>
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
            a{
                margin: auto;
                color: white;
            }
            table{
                border-collapse: collapse;
                text-align: center;
            }
            tbody{
                text-align: center;
                margin-right: 0;
            }
            thead{
                height: 50px;
            }
            body{
                background-color: grey;
            }
            #tresc{
                color:black; 
                text-decoration: none;
                background-color: rgb(238, 238, 238);
            }
            #tresc tr:hover{
            background-color: rgb(155, 164, 181);
            }
            </style>
    </body>
</html>
