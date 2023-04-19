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
