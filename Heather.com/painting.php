<?php
include("heather.php");
$query = "SELECT * FROM paintings";
$result = mysqli_query($conn, $query) or die (mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
	extract($row);
	$namer = "pics/painting/".$name.".jpg";
	echo "<div class = 'portrait' div id = $name><img src = '$namer' height = '150' width = '150' onclick = 'enLarge(\"$name\")'/></div>";
}
?>
