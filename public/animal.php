<?php
    require_once "../data/datos.php";

    $id = $_GET['id'];

    foreach ($animales as $a) {
        if ($a['id'] == $id) {
            $animal = $a;
            break;
        }
    }

    if (!$animal) {
        die("Animal no encontrado.");
    }

    $titulo_pagina = $animal['nombre'];
    include "../includes/header.php";
?>

    <h2><?php echo $animal['nombre']; ?></h2>
    <p><strong>Hábitat:</strong> <?php echo $animal['habitat']; ?></p>
    <img src="../<?php echo $animal['imagen']; ?>" alt="<?php echo $animal['nombre']; ?>" width="300">

    <h3>Características:</h3>
    <ul>
        <?php foreach ($animal['caracteristicas'] as $carac): ?>
            <li><?php echo $carac; ?></li>
        <?php endforeach; ?>
    </ul>

    <p><a href="../<?php echo $animal['pdf']; ?>" target="_blank">Ver descripción en PDF</a></p>
    <p><a href="update-animal.php?id=<?php echo $animal['id']; ?>">Actualizar animal</a></p>

<?php include "../includes/footer.php"; ?>