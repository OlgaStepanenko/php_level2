<?php

require_once '../engine/init.php';

$pageH1 = 'Админка';

if ($_POST) {
	//print_r('1');
	$image = '';
	if (isset($_FILES['image']) AND $_FILES['image']['tmp_name'])  {
		$image = './img/catalog/uploaded/'.$_FILES['image']['name'];
		$uploadedfile =$image;//_DIR_.$image;
		if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadedfile)) {
			die('Cannot upload file');
		}
	}

	$name = $_POST['name'];
	$description = $_POST['description'];
	$price =(float) $_POST['price'];
	$category = $_POST['category'];
	//print_r($name);
	$sql = sprintf(
		"INSERT INTO product (name, description, category, price, image) VALUES ('%s', '%s', '%s', '%s', '%s')",
		mysqli_real_escape_string($mysqliConnect, (string) htmlspecialchars(strip_tags($name))),
		mysqli_real_escape_string($mysqliConnect, (string) htmlspecialchars(strip_tags($description))),
		mysqli_real_escape_string($mysqliConnect, (string) htmlspecialchars(strip_tags($category))),
		$price,
		$image
	);
	//print_r($sql);
		mysqli_query($mysqliConnect, $sql);
	if (mysqli_error($mysqliConnect)) {
		die(mysqli_error($mysqliConnect));
	}

	$id = mysqli_insert_id($mysqliConnect);
	var_dump($id);
	die;
}

?>