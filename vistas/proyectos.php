<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos destacados</title>

    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/proyectos.css">

</head>
<body>
<?php require_once "layout/header.php" ?>
<?php require_once "../admin/controller/userController.php";
$sdasd = new UserController();
?>

    <main>
        <section class="pry-dest-container">
            <h1>Proyectos destacados</h1>
            <div class="pry-dest-video">
                <figure class="video-container">
                        <a href="https://www.youtube.com/watch?v=eklZLdBx9WE&ab_channel=NEONHOUSELED" target="_blank">
                            <img src="../public/imagenes/proyectos/video_pry.webp" alt="">
                        </a>
                </figure>
            </div>
            <p>"Tendencia, vanguardia y novedades"</p>
        </section>
        <section class="pry-nuevos-container">
            <h1>Proyectos nuevos</h1>
            <div class="pry-nuevos-desc">
                <article class="pry">
                    <figure class="img-container">
                        <a href="https://youtu.be/qU08CNcnQhA" target="_blank">
                            <img src="../public/imagenes/proyectos/1.webp" alt="">
                        </a>
                    </figure>
                    <p>Decoración e iluminación <br>
                    de interiores y exteriores</p>
                </article>

                <article class="pry">
                    <figure class="img-container">
                        <a href="https://youtu.be/3QMkxPf7H3U" target="_blank">
                            <img src="../public/imagenes/proyectos/2.webp" alt="">
                        </a>
                    </figure>
                    <p>Decoración con pantallas <br>
                    LED</p>
                </article>
                
            </div>
        </section>

    </main>
    <br>
    <br>
    <br>

    <?php require_once "layout/foother.php" ?>
    </body>
</html>