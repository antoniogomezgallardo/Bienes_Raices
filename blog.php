<?php
    require 'includes/funciones.php';

    incluirTemplate('header');

?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <div class="blog">
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
            <article class="entrada-blog">
                <picture class="imagen-blog">
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpeg">
                    <img src="build/img/blog3.jpg" alt="blog_3" loading="lazy">
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
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpeg">
                    <img src="build/img/blog4.jpg" alt="blog_4" loading="lazy">
                </picture>
                <a href="blog.html" class="texto-blog">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p>Escrito el: <span>21/10/2024 </span>por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle
                        vida a tu espacio</p>
                </a>
            </article>

        </div>
    </main>
    
    <?php incluirTemplate('footer'); ?>