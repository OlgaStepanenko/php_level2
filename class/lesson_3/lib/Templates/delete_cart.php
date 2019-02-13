<?php

require_once '../engine/init.php';

$messege = 'ok';
if ($_POST && isset($_POST['product_id'])) {
	$id = (int)$_POST['product_id'];

	if (!$id)
		$messege = 'Неверный id';
	} else {
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = [];
		}
		if (isset($_SESSION['cart'][$id])) {
			unset($_SESSION['cart'][$id]));

			
		}
		$messege = 'Продукт с id'.$id.'удален из корзины';
	}

	$_SESSION['success_messege'] = $messege;
}

$toUrl = '/cart/index_cart.php';

if (isset($_SERVER['HTTP_REFERER'])) {
	$toUrl = $$_SERVER['HTTP_REFERER'];
}


//header('Location: catalog_admin.php?messege='.$messege);

?>