<?php
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$link = mysqli_connect("localhost", "root", "", "train");
	mysqli_query($link, "UPDATE `logins` SET `admin`='1' WHERE `id`='$id'");
	echo "jest nowy admin <br>
	<a href='showtab.php'> main page </a>";

}
mysqli_close($link);

?>
