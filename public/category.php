<?php
    require_once "../data/datos.php";

    $id = $_GET['id'];

    foreach ($categorias as $cat) {
        if ($cat['id'] == $id) {
            $categorias = $cat;
            break;
        }
    }

    include "../includes/header.php"; 
?>

    <h2><?php echo $categorias['nombre']; ?></h2>
    <p><?php echo $categorias['descripcion']; ?></p>

    <?php foreach ($animales as $id => $animal): ?>
    <?php if ($animal['categoria_id'] == $categorias['id']): ?>
    
    <li>
        <a href="animal.php?id=<?php echo $id; ?>">
                <?php echo $animal['nombre']; ?>
        </a>
    </li>
     
    <?php endif; ?>
    <?php endforeach; ?>


<?php include "../includes/footer.php"; ?>