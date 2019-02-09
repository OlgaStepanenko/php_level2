<?php

require_once '../engine/init.php';

$pageH1 = 'Отзывы';
//$search = $_GET['search'] ?? '';

if ($_POST and isset($_POST['name'], $_POST['review']))  {
	
	$name = $_POST['name'];
	$review = $_POST['review'];

	//$id = creatReviewes($mysqliConnect, $name, $review);
	$sql = sprintf("INSERT INTO reviewes (name, review) VALUES ('%s', '%s')", $name, $review);
	//print_r($sql);
	mysqli_query($mysqliConnect, $sql);
	if (mysqli_error($mysqliConnect)) {
		die(mysqli_error($mysqliConnect));
	}
	$id = mysqli_insert_id($mysqliConnect);
	//var_dump($id);
	//header('Location: reviewes.php');
	die();
}

//require '../public/reviewes.php';

//($_POST && isset($_POST(['name'])) && isset($_POST(['review'])))
?>



