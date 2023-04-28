<!DOCTYPE html>
<html lang="pl">
    <head>
        <title> logowanie do PKP </title>
        <link rel="icon" href="logo.png">
        <link rel="stylesheet" href="stylelog.css">
        <script src="scriptlog.js"></script>
    </head>
    <body>
        <form action="login.php" method="post">
        <div id="divlog">
            <br><br><br>
            <div id="named">name: <input type="text" id="name" name="name"></div>
            <br><br><br><br>
            <div id="passd">password: <input type="password" id="pass" name="pass"></div>
            <br><br><br>
            <button type="submit" id="log">LOG IN</button>
            <br><br><br>
            <button type="button" id="con" onclick="congu()">CONTINUE AS GUEST</button>
            <br><br><br>
            <button type="button" onclick="create()">CREATE ACCOUNT</button>
            </div>
        </form>
        
    </body>
</html>
