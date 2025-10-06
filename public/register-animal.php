<?php
$titulo_pagina = "Registrar Animal";
include "../includes/header.php";
require_once "../data/datos.php";
?>

<h2>Registrar nuevo animal</h2>
<form action="process-animal.php" method="post" enctype="multipart/form-data">
    <label>Categoría:</label>
    <select name="categoria_id" required>
        <?php foreach ($categorias as $categoria): ?>
            <option value="<?php echo $categoria['id']; ?>">
                <?php echo $categoria['nombre']; ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <label>ID del Animal:</label>
    <input type="number" name="id" required><br><br>

    <label>Nombre:</label>
    <input type="text" name="nombre" required><br><br>

    <label>Hábitat:</label>
    <input type="text" name="habitat" required><br><br>

    <label>Características (separadas por comas):</label><br>
    <textarea name="caracteristicas" required></textarea><br><br>

    <label>Imagen:</label>
    <input type="file" name="imagen" accept="image/*" required><br><br>

    <label>PDF:</label>
    <input type="file" name="pdf" accept="application/pdf" required><br><br>

    <button type="submit">Registrar</button>
</form>

<?php include "../includes/footer.php"; ?>