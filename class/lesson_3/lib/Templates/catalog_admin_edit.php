<?php

require_once '../engine/init.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 'null'; 
}

//$id = $_GET['id']; // ?? null;

//if ($_POST && isset($_POST['product_id'])) {
  //  $id = (int)$_POST['product_id'];
    //$message = '';

if (!$id) {
	die('Неверный запрос');
}
$product = getProductOne($mysqliConnect, $id);
//var_dump($product);
//die;

if (!$product) {
	die('Нет продкута с таким id');
}


$pageH1 = 'Редактирование';

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
		'UPDATE product SET name="%s", description="%s", category="%s", price="%s", image="%s" WHERE id=%d',
		mysqli_real_escape_string($mysqliConnect, (string) htmlspecialchars(strip_tags($name))),
		mysqli_real_escape_string($mysqliConnect, (string) htmlspecialchars(strip_tags($description))),
		mysqli_real_escape_string($mysqliConnect, (string) htmlspecialchars(strip_tags($category))),
		$price,
		$image,
		$id
	);
	//print_r($sql);
		mysqli_query($mysqliConnect, $sql);
	if (mysqli_error($mysqliConnect)) {
		die(mysqli_error($mysqliConnect));
	}

	//$id = mysqli_insert_id($mysqliConnect);
	//var_dump($id);
	//die;

	//echo 'все ok';
	//die();
	$messege = 'Продукт с id='.$id.' отредактирован';
}

//header('Location: catalog_admin.php?messege='.$messege);

?>