
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '../engine/repositories.php';

$config = require '../config/config.php';

$mysqliConnect = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);

?>