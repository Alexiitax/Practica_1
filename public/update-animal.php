<?php
  require_once "../data/datos.php";
  
  $id = $_GET['id'];
  
  if (!$id || !isset($animales[$id])) {
      die("Animal no encontrado.");
  }
  
  $animal = $animales[$id];
  $titulo_pagina = "Actualizar " . $animal['nombre'];
  include "../includes/header.php";
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
          move_uploaded_file($_FILES['imagen']['tmp_name'], "../uploads/images/$id.jpg");
          echo "<p>Imagen actualizada correctamente.</p>";
      }
      if ($_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
          move_uploaded_file($_FILES['pdf']['tmp_name'], "../uploads/pdfs/$id.pdf");
          echo "<p>PDF actualizado correctamente.</p>";
      }
  }
?>

<h2>Actualizar archivos de <?php echo $animal['nombre']; ?></h2>
  <form method="post" enctype="multipart/form-data">
      <label>Nueva imagen:</label>
      <input type="file" name="imagen"><br><br>
  
      <label>Nuevo PDF:</label>
      <input type="file" name="pdf"><br><br>
  
      <button type="submit">Actualizar</button>
  </form>

<?php include "../includes/footer.php"; ?>
