<!DOCTYPE html>
<html lang="pl">
    <head>
    <link rel="icon" href="logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Czas pociagow</title>
    </head>
    <body>
        <table width = "100%">
            <thead style="background-color: transparent;">
            <tr>
            <th width = "15%">data wprowadzenia</th>
            <th width = "5%">numer pociagu</th>
            <th width = "10%">nazwisko maszynisty</th>
            <th width = "20%">data odjazdu</th>
            <th width = "20%">szacunkowy czas dojazdu</th>
            <th width = "10%">opoznienie w minutach</th>
            <th width = "10%">nazwa przewoznika</th>
            <th width = "10%">opcje</th>
            </tr>
            </thead>
            <tbody>
            <?php 
            include("mainpage.php")
            ?>
            </tbody>
            </table>
            <br>
            <div style="display: flex;">
            <a href="add.php" id="dodaj">DODAJ DANE</a>
            <a href="forumrad.php" id="forad">FORUM</a>
            <a href="index.html" id="logow">LOGOWANIE</a>
            </div>
            <style>
                #dodaj{
                    border: none;
                    font-size: 40px;
                    background-color: rgba(51,109,177,1);
                    border-radius: 5%;
                    text-decoration: none;
                    height: 70px;
                    width: 310px;
                    margin-left: 20%;
                }
                #logow{
                    border: none;
                    font-size: 40px;
                    background-color: rgba(51,109,177,1);
                    border-radius: 5%;
                    text-decoration: none;
                    height: 70px;
                    width: 310px;
                }
                #forad{
                    border: none;
                    font-size: 40px;
                    background-color:rgba(51,109,177,1);
                    border-radius: 5%;
                    text-decoration: none;
                    height: 70px;
                    width: 310px;
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
