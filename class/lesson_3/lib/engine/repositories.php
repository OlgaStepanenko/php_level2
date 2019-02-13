<?php

function getGallery1($mysqliConnect, $orderDIR = 'ABC') {
	$sql = sprintf("SELECT * FROM gallery WHERE id <=9", $orderDIR);
	$stmt = mysqli_query($mysqliConnect, $sql);

	$galleryes = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
        $galleryes[] = $row;
				}
	return $galleryes;
}

function getGallery2($mysqliConnect, $orderDIR = 'ABC') {
	$sql = sprintf("SELECT * FROM gallery WHERE id >=10", $orderDIR);
	$stmt = mysqli_query($mysqliConnect, $sql);

	$galleryes = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
        $galleryes[] = $row;
				}
	return $galleryes;
}

function getReviewes ($mysqliConnect) {
	$sql = sprintf("SELECT * FROM reviewes WHERE id >0");
	$stmt = mysqli_query($mysqliConnect, $sql);
	$reviewes = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
		$reviewes [] = $row;
	}
	return $reviewes;
}


function getCatalog ($mysqliConnect) {
	$sql = sprintf("SELECT * FROM product WHERE deleted_at is null LIMIT 3");
	$stmt = mysqli_query($mysqliConnect, $sql);
	$product = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
		$product [] = $row;
	}
	return $product;

}


function getProduct ($mysqliConnect) {
	$sql = sprintf("SELECT * FROM product WHERE id >0");
	$stmt = mysqli_query($mysqliConnect, $sql);
	$product = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
		$product [] = $row;
	}
	return $product;

}

function getProductOne ($mysqliConnect, $id) {
	$id = (int) $id;
	$sql = sprintf("SELECT * FROM product WHERE id=".$id);
	$stmt = mysqli_query($mysqliConnect, $sql);
	$product = null;
	while ($row = mysqli_fetch_assoc($stmt)) {
		$product = $row;
		break;
	}
	return $product;

}



function deleteProduct ($mysqliConnect, $id) {
	$date = date('Y-m-d H:i:s');
	$sql = sprintf('UPDATE product SET deleted_at="%s" WHERE id="%d"',	$date, (int)$id);
	mysqli_query($mysqliConnect, $sql);
	if (mysqli_error($mysqliConnect)) {
		return false;
	}

	return true;
}



function getLogin ($mysqliConnect) {
	$sql = sprintf("SELECT * FROM users WHERE id > 0");
	$stmt = mysqli_query($mysqliConnect, $sql);
	$login = [];
	while ($row = mysqli_fetch_assoc($stmt)) {
		$login [] = $row;
	}
	return $login;

}

