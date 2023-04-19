<html>
    <head>
        <link rel="icon" href="logo.png">
        <title>Czas pociagow</title>
    </head>
    <body>
<form action="danewys.php" method="post">
            <input type="number" name="numerpoc" required="required"> <-numer pociagu <br>
            <input type="text" name="nazwiskomasz" required="required"> <- nazwisko maszynisty
            <br>
            <input type="datetime-local" name="dataodj" required="required"> <-data odjazdu
            <br><input type="datetime-local" name="szacunkowyczasdoj" required="required"> <-szacunkowy czas dojazdu
            <br><input type="number" name="opoznieniewmin" min = "0" required="required"> <- opoznienie w minutach<br>
            <input type="text" name="nazwaprzew" required="required"> <- nazwa przewodnmika </input>
            <br><input type="submit" name="submit" value="dodaj to!" />
</form>
    </body>
</html>