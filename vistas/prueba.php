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

<style>
.pinWrapper {
  padding: 0;
  border: 1px solid #d9d9d9;
  border-radius: 6px;
  overflow: hidden;
  background-color: white;
  margin: .5em;
}

.pinWrapper p {
  font-size: .8rem;
}

.pinTerest {
  max-width: calc(5 * 16rem);
  min-width: 25em;
  margin: 0 auto;
}

.pin {
  padding: .8rem;
}

.CreditTitle {
  border-top: 1px solid #e0e0e0;
}

.pinImage img {
  width: 100%;
}


/* FLEXBOX */

#pinTerest {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.pinWrapper {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  flex: 0 1 calc(50% - 1em);
}

@media screen and ( min-width:30em) {
  .pinWrapper {
    flex: 0 1 calc(33% - 1em);
  }
}

@media screen and ( min-width:48em) {
  .pinWrapper {
    flex: 0 1 calc(25% - 1em);
  }
}

@media screen and ( min-width:62em) {
  .pinWrapper {
    flex: 0 1 calc(20% - 1em);
  }
  h1 {
    font-size: 2em;
  }
}
</style>

</head>

<body>
    <?php require_once "layout/header.php" ?>

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
            <div  id="newProj" style="display:flex;flex-wrap:wrap;justify-content:center">


            </div>
        </section>

    </main>
    <br>
    <br>
    <br>

    <?php require_once "layout/foother.php" ?>

    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "../admin/controller/userController.php?action=listgallery",
                success: function(response) {
                    // console.log(response)
                    response.forEach(element => {
                        // console.log(element.id)

                        $('#newProj').append(`
                        <article class="pinWrapper">
                        <div class="pinImage">
                        <img src="http://www.placecage.com/236/275" alt="Nicolas Cage">
                        <h3 class="pin GridTitle">Samantha French</h3>
                        <p class="pin Description">Samantha French received a BFA from Minneapolis College of Art and Design in 2005. </p>
                        </div>
                        <p class="pin CreditTitle"><strong>Pinned from</strong>:<br>Uploaded by user</p>
                        <div>
                        </div>
                        </article>

                           
                        `);
                    });
                }
            });


        });
    </script>
</body>

</html>