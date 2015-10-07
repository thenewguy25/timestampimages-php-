<?php
include 'mysql.php';
$image = file_get_contents($_FILES['image']['tmp_name']); 
$id = $_POST['id'];

$query = 'INSERT INTO image(user_id,image) VALUES(:id,:image)  ';

$stmt = $conn -> prepare($query);
$stmt -> execute(array(
	'image' => $image,
	'id' => $id
	));

header("location:dashboard.php");

?>