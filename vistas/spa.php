<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon House Led-Servicios</title>

    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">

    <link rel="stylesheet" href="../public/css/shared/restaurante.css">


</head>

<body>
<?php require_once "layout/header.php" ?>
    <main class="main__categoria">
        <h2 class="categoria1__titulo ">SALÓN SPA Y BARBERÍA</h2>


        <div class="overlay" id="overlay">
            <figure class="overlay__imagen">

                <a href="#" id="derecha" class="overlay__item right"><i class="far fa-circle"></i></a>
                <a href="#" id="isquierda" class="overlay__item left"><i class="far fa-circle"></i></i></a>
                <img class="overlay__img imagen1 a " id="inicial" src="../public/imagenes/SALON SPA Y BARBERIA/1.webp" alt="">
                <img class="overlay__img imagen1" src="../public/imagenes/SALON SPA Y BARBERIA/2.webp" alt="">

            </figure>



        </div>

        <br>

        <h2 class="subtitulo">Revisa nuestros diseños exclusivos:</h2>
        <a class="catalogo" id="catalogo" href="#">Ver catálogo completo</a>

        <a class="cotizar" href="contacto.php">Cotizar</a>

        <div id="form_1" class="overlay__formulario">
            <a href="#" id="x_1" class="overlay__x x">X</a>
            <form class="overlay__form" id="restaurante">
                <div class="empresa">
                    <label class="overlay__label" for="empresa">Nombre o Empresa:
                    </label>

                    <input class="overlay__input e" type="text" id="empresa" pattern="[a-zA-Z ]{2,254}"
                        title="Solo debe contener letras. e.g. Company" required>
                </div>
                <div class="correo">
                    <label for="email" class="overlay__label cor">Correo:</label>
                    <input id="email" class="overlay__input c" type="email"
                        pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" title="e.g. aso@gmail.com" required>

                </div>
                <div class="telefono">
                    <label for="tel" class="overlay__label te">Celular:</label>
                    <input type="text" id="tel" class="overlay__input t" pattern="[0-9]{9}" title="debe conter numeros"
                        required>
                </div>
                <input type="hidden" id="nomcategory" class="hiden" value="spa">
                <input type="hidden" id="url" class="hiden" value="https://www.flipsnack.com/898DCEEEFB5/sal-n-spa-y-barber-a-catalogo-con-textos.html">
                <input type="submit" class="overlay__submit extra" value="Obtener mi catálogo de categoría salón spa y barbería">

            </form>

        </div>


    </main>
<?php require_once "layout/foother.php" ?>
<script type="text/javascript" src="../public/js/restaurante.js"></script>
    <script type="text/javascript" src="../public/js/catalogrequest.js"></script>


</body>

</html>