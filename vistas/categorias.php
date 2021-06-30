<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led-Categorías</title>

    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/categoria.css">
</head>

<body>
<?php 
require_once "layout/header.php";
require_once '../admin/model/Categoria.php';
?>


    <main class="main__categoria">
        <h2 class="categoria1__titulo ">CATEGORÍAS</h2>
        <div class="categoria1__section">
        <?php
            $categorias = Categoria::all();
        foreach ($categorias as $categoria) {
        ?>
            <figure class="categoria1__imagen">
                <a href="categoria.php?c=<?=$categoria->slug?>">
                <img class="categoria1__img" id="imagen_5" src="../public/imagenes/<?=$categoria->imagen?>" alt="">
            </a>
                <figcaption class="categoria1__desc"><?=$categoria->nombre?></figcaption>
            </figure>                    
        <?php
            }
        ?>
    </main>

    <?php require_once "layout/foother.php" ?>
</body>

</html>