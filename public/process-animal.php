<?php
$titulo_pagina = "Procesar Animal";
include "../includes/header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $habitat = $_POST['habitat'];
    $categoria_id = $_POST['categoria_id'];
    $caracteristicas = explode(',', $_POST['caracteristicas']);
  
    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $ruta_imagen = "../uploads/images/" . $id . ".jpg";
        move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_imagen);
    }

    if ($_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
        $ruta_pdf = "../uploads/pdfs/" . $id . ".pdf";
        move_uploaded_file($_FILES['pdf']['tmp_name'], $ruta_pdf);
    }
    ?>

    <h2><?php echo $nombre; ?></h2>
    <p><strong>Hábitat:</strong> <?php echo $habitat; ?></p>

    <img src="../uploads/images/<?php echo $id; ?>.jpg" alt="<?php echo $nombre; ?>" width="300">

    <h3>Características:</h3>
    <ul>
    <?php foreach ($caracteristicas as $c): ?>
        <li><?php echo trim($c); ?></li>
    <?php endforeach; ?>
    </ul>

    <p><a href="../uploads/pdfs/<?php echo $id; ?>.pdf" target="_blank">Ver PDF</a></p>

<?php
}
include "../includes/footer.php";
?>
