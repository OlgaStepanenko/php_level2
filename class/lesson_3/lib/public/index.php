//<?php

require_once '../engine/init.php';

//?>



<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Welcom to startup</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
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
				<h2 class="serv">галерея</h2>
				<img id="line" src="./img/line3.png">

				<?php
						include'../templates/fragment/menu.php';
					?>


				
				<div class="foto_latest_works">

				<?php
					include'../loader.php';
				?>
					//<?php
						//$galleryes = getGallery1($mysqliConnect);
						//include '../templates/galleryes.php';
					//?>

					
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
			<img id="line_by" src="./img/line5.png">  <!--почему-то в слоях в фотошопе отсутствует нужная картинка, отсутствует ВООБЩЕ -->
				<p class="by">&copy; 2015 startup, designed by shapedtheme</p>
		</footer>
	</div>
</body>
</html>