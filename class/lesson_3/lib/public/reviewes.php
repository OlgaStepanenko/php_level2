
<?php

require_once '../engine/init.php';

//require '../templates/review.php'

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Отзывы</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
				<h2 class="serv">отзывы</h2>
				<img id="line" src="./img/line3.png">
				
				<?php
						include'../templates/fragment/menu.php';
					?>

				
				<div class="foto_latest_works">
				
					<br>


					<div>
						<form method="post" action="reviewes.php">
							<div class="form-group">
    							<label for="exampleFormControlInput1">Ваше имя</label>
    							<input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Имя" required>
  							</div>
 							<div class="form-group">
    							<label for="exampleFormControlTextarea1">Оставьте свой отзыв</label>
    							<textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3" required></textarea>
  							</div>

  							<div>
  								<button type="submit"  class="btn btn-primary">Отправить!</button>
  									
  							</div>
						</form>
					<div>	
						<ul>
							<?php
							$reviewes = getReviewes($mysqliConnect);
							include '../templates/reviewes.php';
							?>
							<?php
							include'../templates/review.php';
							?>
							
						</ul>
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





