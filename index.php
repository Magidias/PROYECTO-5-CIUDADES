<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- NAV -->
    <?php 
    include "./php/nav.php"
    ?>

    <header></header>

    <main>
        <section>
            <h2>Conoce los mejores destinos</h2>
            <article>
                <h3 class=".oculto">20 años regalando experiencias</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo provident odit eum dolorum nostrum repudiandae quo, accusantium ad quod molestias quas sequi ipsum natus laboriosam! Ipsum cumque, sit provident excepturi maiores maxime distinctio deleniti, temporibus vero nesciunt aut rerum possimus cupiditate aspernatur veniam, ad praesentium quasi fugit iure laboriosam nam!
                </p>
                <div id="destinos">
                    <div class="destino">
                        <img src="./assets/imags-web/londres.jpg" alt="">
                    </div>

                    <div class="destino">
                        <img src="./assets/imags-web/madrid.jpg" alt="">
                    </div>

                    <div class="destino">
                        <img src="./assets/imags-web/paris.jpg" alt="">
                    </div>
                </div>
            </article>
        </section>

        <!-- FORM -->
        <?php 
        include "./php/form.php"
        ?>

    </main>

    <!-- FOOTER -->
        <?php 
        include "./php/footer.php"
        ?>

</body>
</html>