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

    <main>
        <section>
            <h2>MADRID</h2>
            <article>
                <h3>Sociedad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo provident odit eum dolorum nostrum repudiandae quo!</p>
                <img src="./assets/imags-web/madrid01.jpg" alt="Imagen de Madrid" title="Madrid, un destino encantador"> 
            </article>

            <article>
                <h3>Exposiciones Universales</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex facilis perferendis repellat saepe, consequuntur fugit repellendus aliquid itaque, porro consequatur, corrupti natus. Quae, sit ullam quam deleniti fuga et?</p>
                <img src="./assets/imags-web/londres02.jpg" alt="Imagen de Madrid" title="Madrid, un destino encantador" >
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