<?php
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$link = mysqli_connect("localhost", "root", "", "train");
	mysqli_query($link, "DELETE FROM logins WHERE id=$id");
	echo "Skasowano <br>
	<a href='showtab.php'> main page </a>";
}
mysqli_close($link);
?>
