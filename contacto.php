<?php

    include './includes/templates/header.php';

?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img src="build/img/destacada3.jpg" alt="foto-contacto" loading="lazy">
        </picture>

        <h2>Rellene el formulario de Contacto</h2>

        <form action="src/php/enviar_formulario.php" method="POST" class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu telefono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea placeholder="Tu mensaje" id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opcion-compra">Vende o Compra</label>
                <select name="opcion-compra" id="opcion-compra">
                    <option value="" disabled selected>-- Seleciona una opción --</option>
                    <option value="Vender">Vender</option>
                    <option value="Comprar">Comprar</option>
                </select>

                <label for="precio-presupuesto">Precio o Presupuesto</label>
                <input type="number" name="" id="precio-presupuesto" placeholder="Tu precio o presupuesto" min="0">
            </fieldset>

            <fieldset>
                <legend>Información de Contacto</legend>

                <p>Cómo desea ser contactado</p>
                <div class="radio-group">
                    <label for="radio-telefono">Teléfono</label>
                    <input type="radio" name="contacto" value="telefono" id="radio-telefono">
                    <label for="radio-email">E-mail</label>
                    <input type="radio" name="contacto" value="email" id="radio-email">

                </div>
                <p>Si eligió teléfono, elija la fecha y la hora</p>
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">
                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>
    </main>

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