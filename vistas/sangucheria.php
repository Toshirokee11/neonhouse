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
        <h2 class="categoria1__titulo ">SANGUCHERÍA</h2>
        
        <?php require_once "layout/modal.php" ?> 

        <img name="slider" width="100%" src="../public/imagenes/SANGUCHERIA/f1.png">

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
                <input type="hidden" id="nomcategory" class="hiden" value="sangucheria">
                <input type="hidden" id="url" class="hiden" value="https://www.flipsnack.com/898DCEEEFB5/sangucher-a-catalogo-con-textos-actualizados-nhl.html">
                <input type="submit" class="overlay__submit" value="Obtener mi catálogo de categoría sanguchería">

            </form>

        </div>


    </main>
    <?php require_once "layout/foother.php" ?>
    <script type="text/javascript" src="../public/js/restaurante.js"></script>
    <script type="text/javascript" src="../public/js/catalogrequest.js"></script>
    <?php require_once "layout/photosphere-script.php" ?>
    <script>
        window.addEventListener('load',function(){
            var imagenes = [];
            imagenes[0]='../public/imagenes/SANGUCHERIA/f1.png';
            imagenes[1]='../public/imagenes/SANGUCHERIA/f2.png';
            imagenes[2]='../public/imagenes/SANGUCHERIA/f3.png';
            imagenes[3]='../public/imagenes/SANGUCHERIA/f4.png';
            var i = 0;
            function cambiarImagenes(){
                document.slider.src=imagenes[i];
                if ( i < 3 ) {
                    i++;
                } else {
                    i = 0;
                }
            }

            setInterval(cambiarImagenes,3000);
            
        });
    </script>

</body>

</html>