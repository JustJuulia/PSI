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
<?php
	if (isset($_GET["id"])){
		$id=$_GET["id"];
		$link = mysqli_connect("localhost", "root", "", "train");
		$result=mysqli_query($link, "SELECT * FROM main WHERE id=$id");
		$wynik = mysqli_fetch_assoc($result);
		$datawp=$wynik["datawp"];
		$numerpoc=$wynik["numerpoc"];
    	$nazwiskomasz=$wynik["nazwiskomasz"];
    	$dataodj=$wynik["dataodj"];
    	$szacunkowyczasdoj=$wynik["szacunkowyczasdoj"];
    	$opoznieniewmin=$wynik["opoznieniewmin"];
        $nazwaprzew=$wynik["nazwaprzew"];
		echo "<form action='edit.php' method='post'>
		<br><br><br>
					<input type='number' name='numerpoc' value='$numerpoc'> <-numer pociagu
					<input type='text' name='nazwiskomasz' value='$nazwiskomasz'> <-nazwisko maszynisty
					<input type='datetime-local' name='dataodj' value='$dataodj'> <-data odjazdu
					<input type='datetime-local' name='szacunkowyczasdoj' value='$szacunkowyczasdoj'> <- szacunkowy czas dojazdu
					<input type='number' name='opoznieniewmin' value='$opoznieniewmin'> <-opoznienie w minutach
                    <input type='text' name='nazwaprzew' value='$nazwaprzew'> <-nazwa przewodnika
                    <input type='hidden' name='id' value='$id'>
                    <input type='submit' value='zmien dane'>
                    </form>
				";
				
	}
	if (isset($_POST["numerpoc"])){
		$id=$_POST["id"];
		$numerpoc = $_POST["numerpoc"];
		$nazwiskomasz=$_POST["nazwiskomasz"];
    	$dataodj=$_POST["dataodj"];
    	$szacunkowyczasdoj=$_POST["szacunkowyczasdoj"];
    	$opoznieniewmin=$_POST["opoznieniewmin"];
    	$nazwaprzew=$_POST["nazwaprzew"];
		$link = mysqli_connect("localhost", "root", "", "train");
		$result=mysqli_query($link, "UPDATE main SET numerpoc='$numerpoc', nazwiskomasz='$nazwiskomasz',dataodj='$dataodj',szacunkowyczasdoj='$szacunkowyczasdoj',nazwaprzew='$nazwaprzew' WHERE id='$id'");
		echo "dane zostaly zmienione
		<a href='showtab.php'>mainpage </a>";
		
	}
?>
</body>
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
    }</style>
	</html>
