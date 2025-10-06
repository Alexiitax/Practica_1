<?php
    require_once "../data/datos.php";
    
    $id = $_GET['id'];
    
    if (!$id || !isset($animales[$id])) {
        die("Animal no encontrado.");
    }
    
    $animal = $animales[$id];
    $titulo_pagina = $animal['nombre'];

    include "../includes/header.php";
?>

    <h2><?php echo $animal['nombre']; ?></h2>
    <p><strong>Hábitat:</strong> <?php echo $animal['habitat']; ?></p>

    <img src="../uploads/images/<?php echo $animal['imagen']; ?>" alt="<?php echo $animal['nombre']; ?>" width="300">

    <h3>Características:</h3>
    <ul>
    <?php foreach ($animal['caracteristicas'] as $caracteristica): ?>
        <li><?php echo $caracteristica; ?></li>
    <?php endforeach; ?>
    </ul>

    <p>
        <a href="../uploads/pdfs/<?php echo $animal['pdf']; ?>" target="_blank">Ver descripción en PDF</a>
    </p>

    <p>
        <a href="update-animal.php?id=<?php echo $id; ?>">Actualizar animal</a>
    </p>

<?php include "../includes/footer.php"; ?>
