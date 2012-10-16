<?php
include("heather.php");
$pName = $_POST['namer'];
$query = "SELECT * FROM paintinfo WHERE name = '$pName'";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
	extract($row);
	$namer = "pics/painting/".$name.".jpg";
	echo "<div class = 'portraitB' div id = $name><img src = '$namer' height = '200' width = '200' />";
	echo "<p>Title:  $name</p>";
	echo "<p>$summary</p></div>";
}
?>