<?php
include('heather.php');
$fileName = $_POST['newName'];
$newName = "Projects/".$fileName;
mkdir($newName, 777);
?>
