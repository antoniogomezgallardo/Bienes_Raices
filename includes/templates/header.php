<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/build/css/app.css">
    <title>BR</title>
</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="index.php">
                    <img class="logo-header" src="/build/img/logo.svg" alt=" Logo Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="foto-menu-hamburguesa">
                </div>

                <nav class="navegacion navegacion-principal">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncio</a>
                    <a href="blog.php">Blog</a>
                    <a href="contacto.php">Contacto</a>
                    <a>
                        <img class="dark-mode-button" src="/build/img/dark-mode.svg" alt="dark-mode-icon">
                    </a>
                </nav>
            </div>
            <?php if($inicio) { ?>
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
        </div>
    </header>