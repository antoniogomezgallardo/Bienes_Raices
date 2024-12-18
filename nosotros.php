<?php
    require 'includes/funciones.php';

    incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Sobre Nosotros</h1>

        <div class="nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img src="build/img/nosotros.jpg" alt="nosotros" loading="lazy">
            </picture>
            <div class="nosotros-texto">
                <h2>25 años de experiencia</h2>
                <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc
                    aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh
                    quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus
                    accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo
                    finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at
                    tempor finibus, urna nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue.
                    Curabitur malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.
                </p>
            </div>
        </div>
    </main>

    <div class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono-seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Quae maiores quas illo incidunt facilis ut quia tenetur soluta culpa pariatur inventore porro neque
                    cumque beatae magni enim, laboriosam, officiis dicta!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono-precio" loading="lazy">
                <h3>Precio</h3>
                <p>Quae maiores quas illo incidunt facilis ut quia tenetur soluta culpa pariatur inventore porro neque
                    cumque beatae magni enim, laboriosam, officiis dicta!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono-tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Quae maiores quas illo incidunt facilis ut quia tenetur soluta culpa pariatur inventore porro neque
                    cumque beatae magni enim, laboriosam, officiis dicta!</p>
            </div>
        </div>
    </div>

    <?php incluirTemplate('footer'); ?>