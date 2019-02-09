<?php

//массив
$gallery = array(
	'foto1' => "flex1.png",
	'foto2' => "flex2.png",
	'foto3' => "flex3.png", 
	'foto4' => "flex4.png",
	'foto5' => "flex5.png",
    'foto6' => "flex6.png"
    'foto4' => "flex7.png",
	'foto5' => "flex8.png",
	'foto6' => "flex9.png"
);

//подгружаем и активируем авто-загрузчик Twig -a
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
    //указываем, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');

    //инициализируем Twig
    $twig = new Twig_Environment($loader);

    //подгружаем шаблон
    $template = $twig->loadeTemplate('gallery1.tmpl');

    echo $template->render(array(
        'gallery' => $gallery
    ));
} catch(Exception $e) {
    die ('ERROR: '. $e->getMassage());
}

?>


