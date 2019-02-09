<?php
//$product = getCatalog($mysqliConnect);
//include'./catalog_vivod.php';

if (isset($_GET['num'])) {
    $num = $_GET['num'];
    $stmt = mysqli_query('SELECT * FROM product LIMIT $num, 3, $sql');

    if (mysqli_num_rows($stmt) > 0) {
        $product = mysqli_fetch_array($stmt);
        do {
            $num++;
            printf($num);
        } while ($product = mysqli_fetch_array($stmt));
    }
}

?>