<?php

require_once '../engine/init.php';


?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Welcom to startup</title>
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
				<h2 class="serv">Редактирование товара</h2>
				<img id="line" src="./img/line3.png">

				<?php
						include'../templates/fragment/menu.php';
					?>


				
				<div class="foto_latest_works">
					
				<form method="post" enctype="multipart/form-data">
					<?php
						//$product = getProduct($mysqliConnect);
						include '../templates/catalog_admin_edit.php';
					?>
  					<div class="form-group">
    					<label for="exampleFormControlInput1">Имя</label>
   						<input type="name" name="name" value= "<?= $product['name'] ?>"  class="form-control" placeholder="Имя">
  					</div>
  					<div class="form-group">
    					<label for="exampleFormControlTextarea1">Описание товара</label>
    					<textarea class="form-control"  name="description" rows="6" placeholder="Описание товара" required><?= $product['description'] ?></textarea>
  					</div>
  					<div class="form-group">
    					<label for="exampleFormControlInput1">Цена</label>
   						<input type="" name="price" value="<?= $product['price'] ?>" class="form-control" placeholder="Цена">
  					</div>
  					<div class="form-group">
    					<label for="exampleFormControlSelect1">Категория</label>
    					<select name="category" class="form-control">
      						<option value="for_man" <?php if($product['category'] == 'for_man') {echo 'selected';} ?> >Для мужчин</option>
      						<option value="for_kids" <?php if($product['category'] == 'for_kids') {echo 'selected';} ?> >Для детей</option>
      						</select>
        			</div>
        			<div class="form-group">
    					<label for="exampleFormControlFile1">Картинка</label>
    					<input type="file" name="image" class="form-control-file">
  					</div>
  					<div>
  						<button type="submit"  class="btn btn-primary">Отправить</button>
  					</div>
  				</form>	
  				<div>
  					<?php
						//$product = getProduct($mysqliConnect);
						include '../templates/catalog_admin_edit.php';
					?>
  				</div>			
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