<?php

require '../engine/init.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Галерея 2</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	

		<header>
			<p class="logo">Startup</p>
			<nav>
				<ul class="menu">
						<li><a href=""> Home </a></li>
						<li><a href=""> Services </a></li>
						<li><a href=""> About</a></li>
						<li><a href=""> Works</a></li>
						<li><a href=""> Blog</a></li>
						<li><a href=""> Clients</a></li>
						<li><a href=""> Contact</a></li>
				</ul>
			</nav>
				<h1>welcome to startup</h1>
				<p class="your">Your Favourite Creative Agency Template</p>
				<a class="get" href="">get started</a> 
		</header>

		<main>	

			<div id="block_latest_works">
				<h2 class="serv">Корзина</h2>
				<img id="line" src="./img/line3.png">

				

				<?php
						include'../templates/fragment/menu.php';

					?>
				
				<div class="foto_latest_works">

					<?php 
						include '../templates/index_card.php';
					 ?>

					<?php foreach ($cartTableData as $cartItem): ?>
						<tr>
							<td data-th="Product">
								<div>
									<div>
										<h4> <?= $cartItem['mame']?></h4>
										<p><?= $cartItem['short_description']?> </p>
									</div>
								</div>
    						</td>
    						<td data-th="Price"><?= $cartItem['price'] ?>рублей</td>
    						<td data-th="Quantity">
    							<input type="number" class="form-control text-center" value="<?= $cartItem['quantity'] ?>">
    						</td>
    						<td data-th="Subtotal"><?= $cartItem['subtotal'] ?>рублей</td>
    						<td data-th="">
    							<form method="post" action="/templates/delete_cart.php">
    								<input type="hidden" name="product_id" value="<?= $cartItem['id'] ?>">
    							<button class="btn btn-danger btn-sm"><i class="fa fa-frash-o"></i></button>
    						</td>
    					</tr>

				<?php  endforeach ?>

				<tr class="visible-xs">
					<td class="text-center"><strong>Total <?= $cartTotalSum ?>рублей</strong></td>
				</tr>


					
				</div>
			</div>

			<div id="block_john_doe">
				<div class="deorham">
					<div class="flex5">
						<img src="./img/deorham.png">
					</div>
					<div class="flex5">
						<img src="./img/ratings.png">
					</div>
					<div class="flex5">
						<img src="./img/malikmedia.png">
					</div>
					<div class="flex5">
						<img src="./img/bcause.png">
					</div>
					<div class="flex5">
						<img src="./img/tomgiby.png">
					</div>
				</div>
				<p class="hvaing">"Hvaing placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.<br>Temporibus autem quibusdam et aut officiis aut rerum"</p>
				<p class="john_doe">John Doe, Google Inc.</p>
				<div class="dot">
					<div class="flex6">
						<img src="./img/o1.png">
					</div>
					<div class="flex6">
						<img src="./img/o2.png">
					</div>
					<div class="flex6">
						<img src="./img/o3.png">
					</div>
				</div>
			</div>

			
		</main>

		<footer>
			<picture>
				<source   srcset="./img/sett.svg">
				<img width="50" height="50" src="./img/sett.png">
			</picture>
			<div class="soc_icon">
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-facebook-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-google-plus-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-twitter-square"></i>
					</div>
					<div class="flex8">
						<!--<img class="twitter" src="./img/twitter.png">-->
						<i class="fab fa-instagram"></i>
					</div>
			</div>
			<img id="line_by" src="./img/line5.png"> 
				<p class="by">&copy; 2015 startup, designed by shapedtheme</p>
		</footer>
	</div>
</body>
</html>



