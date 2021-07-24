<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led-Servicios</title>
    
    <?php require_once "layout/links.php" ?>

</head>

<body>
<?php require_once "layout/header.php" ?>

    <main class="main__categoria">
        <h2 class="categoria1__titulo ">FAST FOOD</h2>
      
        <?php require_once "layout/modal.php" ?>

        <div id="slider">
            <figure>
                <img src="../public/imagenes/Slider/FAST FOOD/1.png" alt="">
                <img src="../public/imagenes/Slider/FAST FOOD/2.png" alt="">
                <img src="../public/imagenes/Slider/FAST FOOD/3.png" alt="">
                <img src="../public/imagenes/Slider/FAST FOOD/4.png" alt="">
            </figure>
        </div>
    
<br>

        <h2 class="subtitulo">Revisa nuestros diseños exclusivos:</h2>
        <a class="catalogo" id="catalogo" href="#">Ver catálogo completo</a>

        <a class="cotizar" href="contacto.php">Cotizar</a>

        <div id="form_1" class="overlay__formulario">
            <a href="#" id="x_1" class="overlay__x x">X</a>
<form class="overlay__form"  id="restaurante">
    <div class="empresa">
<label class="overlay__label" for="empresa">Nombre o Empresa:
</label>

<input class="overlay__input e" type="text" id="empresa" pattern="[a-zA-Z ]{2,254}" title="Solo debe contener letras. e.g. Company" required>
</div>
<div class="correo">
<label for="email" class="overlay__label cor">Correo:</label>
<input id="email" class="overlay__input c" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com" required>

</div>
<div class="telefono">
<label for="tel" class="overlay__label te">Celular:</label>
<input type="text" id="tel" class="overlay__input t" pattern="[0-9]{9}" title="debe conter numeros" required>
</div>
<input type="hidden" id="nomcategory" class="hiden" value="fast__food">
<input type="hidden" id="url" class="hiden" value="https://www.flipsnack.com/nhlweb/fast-food-catalogo-con-textos.html">
<input type="submit" class="overlay__submit" value="Obtener mi catálogo de categoría fast food">

</form>

        </div>
            
        
    </main>


    <?php require_once "layout/foother.php" ?>
    <script type="text/javascript" src="../public/js/restaurante.js"></script>
    <script type="text/javascript" src="../public/js/catalogrequest.js"></script>
    <script>
    // 360 viewer
    var PSV = new PhotoSphereViewer({
        panorama: '../public/imagenes/Imagenes 360/FAST FOOD/1.png',
        container: 'photosphere',
        navbar: 'fullscreen',
        default_fov: 65,
        mousewheel: false,
    });
    </script>

</body>

</html>