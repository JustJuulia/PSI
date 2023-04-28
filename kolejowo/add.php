<html>
    <head>
        <link rel="icon" href="logo.png">
        <title>Czas pociagow</title>
    </head>
    <body>
    <div id="high" style="display:flex;">
    <img src="logo.png" width="70px" height="90px" style="margin-left: 0;">
    <a href="forumrad.php" id="forad" class="options">FORUM</a>
    <a href="index.php" id="logow" class="options">LOGOWANIE</a>
    <a href="account.php" id="acc" class="options">KONTA</a>
    <a href="showtab.php" id="acc" class="options">TABELA</a>
    <img src="logo.png" width="70px" height="90px" style="margin-left: 14%;">
    </div>
    
<form action="danewys.php" method="post">
    <br><br><br>
            <input type="number" name="numerpoc" required="required"> <-numer pociagu <br>
            <input type="text" name="nazwiskomasz" required="required"> <- nazwisko maszynisty
            <br>
            <input type="datetime-local" name="dataodj" required="required"> <-data odjazdu
            <br><input type="datetime-local" name="szacunkowyczasdoj" required="required"> <-szacunkowy czas dojazdu
            <br><input type="number" name="opoznieniewmin" min = "0" required="required"> <- opoznienie w minutach<br>
            <input type="text" name="nazwaprzew" required="required"> <- nazwa przewodnmika </input>
            <br><input type="submit" name="submit" value="dodaj to!" />
</form>
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
    input{
    width: 200px;
    margin-left: 30%;
    margin-bottom: 3%;
    }
    body{
        background-color: grey;
        color: white;
    }
    input[type="submit"]{
        border-collapse: collapse;
        height: 70px;
        border-radius: 15%;
        font-size: larger;
    }
    input[type="submit"]:hover{
        border-collapse: collapse;
        height: 70px;
        border-radius: 15%;
        font-size: larger;
        background-color: lightgrey;
    }
    form{
        background-color: black;
        width: 700px;
        margin: auto;
        border-radius: 15%;
        margin-top: 5%;
        height: 500px;
    }
</style>
    </body>
</html>