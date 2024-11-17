<?php

    $inicio = true;
    include './includes/templates/header.php';

?>

    <main class="contenedor seccion">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Departamentos en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelentes vistas, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="icono WC" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="icono parking" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a class="boton boton-amarillo" href="anuncios.html">
                        Ver Propiedad
                    </a>

                </div>
            </div>
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con diseño moderno, así como tecnología inteligente y amueblada</p>
                    <p class="precio">$2.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="icono WC" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="icono parking" loading="lazy">
                            <p>2</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                            <p>3</p>
                        </li>
                    </ul>

                    <a class="boton boton-amarillo" href="anuncios.html">
                        Ver Propiedad
                    </a>

                </div>
            </div>
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con piscina</h3>
                    <p>Casa con piscina y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">$3.500.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="build/img/icono_wc.svg" alt="icono WC" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="build/img/icono_estacionamiento.svg" alt="icono parking" loading="lazy">
                            <p>2</p>
                        </li>
                        <li>
                            <img src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>

                    <a class="boton boton-amarillo" href="anuncios.html">
                        Ver Propiedad
                    </a>

                </div>
            </div>
        </div>
        <div class="ver-todas alinear-derecha">
            <a class="boton boton-verde" href="anuncios.html">
                Ver Todas
            </a>
        </div>
    </section>

    <section class="seccion-contactanos">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a class="boton-amarillo" href="contacto.html">Contáctanos</a>
    </section>

    <div class="Blog-Testimonios seccion contenedor">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            <article class="entrada-blog">
                <picture class="imagen-blog">
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <source srcset="build/img/blog1.jpg" type="image/jpeg">
                    <img src="build/img/blog1.jpg" alt="blog_1" loading="lazy">
                </picture>
                <a href="blog.html" class="texto-blog">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: <span>20/10/2024 </span>por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando
                        dinero</p>
                </a>
            </article>
            <article class="entrada-blog">
                <picture class="imagen-blog">
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <source srcset="build/img/blog2.jpg" type="image/jpeg">
                    <img src="build/img/blog2.jpg" alt="blog_2" loading="lazy">
                </picture>
                <a href="blog.html" class="texto-blog">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>21/10/2024 </span>por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle
                        vida a tu espacio</p>
                </a>
            </article>
        </section>
        <section class="testimonios">
            <h3>Testimoniales</h3>
            <div class="testimonio">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron
                        cumple con todas mis expectativas.
                </blockquote>
                <p>- Antonio Gómez Gallardo</p>
            </div>

        </section>
    </div>

    <footer class="footer seccion">
        <div class="contenedor contenido-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncio</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos reservados 2024 &copy;</p>
    </footer>

    <script src="build\js\bundle.min.js"></script>
</body>

</html>