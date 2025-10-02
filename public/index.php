<?php

    include "../includes/header.php";
    require_once "../data/datos.php";
    echo "<ul>";
    for($j = 1; $j <= count($categorias); $j++){
        echo "<li><a href='category.php?id=" . $categorias[$j]["id"] . "'>";
        echo $categorias[$j]["nombre"] . "</a></li>";
    }
    echo "</ul>";

?>




<?php include "../includes/footer.php"; ?>