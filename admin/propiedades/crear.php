<?php
    //base de datos
    require '../../includes/config/database.php';
    $db = conectarDB();
    //var_dump($db);

    //header
    require '../../includes/funciones.php';

    incluirTemplate('header');

    //POST

    if ($_SERVER['REQUEST_METHOD'] === 'POST' ){
/*         echo '<pre>';
        echo var_dump($_POST);
        echo '</pre>'; */

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion= $_POST['descripcion'];
        $habitaciones= $_POST['habitaciones'];
        $wc= $_POST['wc'];
        $estacionamiento= $_POST['estacionamiento'];
        $vendedores_id= $_POST['vendedor'];


        // Validar Datos del formulario

        $errores = [] ;
        
        if(!$titulo){
            $errores[] =  'Necesitas introducir un título';
        }

        if(!$precio){
            $errores[] =  'Necesitas introducir un precio';
        }

        if(strlen($descripcion) < 50){
            $errores[] =  'Necesitas introducir una descripción de al menos 50 caracteres';
        }

        if(!$habitaciones){
            $errores[] =  'Necesitas introducir un numero de habitaciones';
        }

        if(!$wc){
            $errores[] =  'Necesitas introducir un numero de baños';
        }

        if(!$estacionamiento){
            $errores[] =  'Necesitas introducir un numero de plazas de estacionamiento';
        }

        if(!$vendedores_id){
            $errores[] =  'Necesitas introducir un vendedor';
        }

        // Revisar si hay errores, si no hay insertar los datos en la BBD

        if(empty($errores)){

            // Insertar en la Base de Datos
            $query = "INSERT INTO propiedades( titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) 
                        VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedores_id') ";

            /* echo $query; */

            // Validar el INSERT en la BBDD
            $resultado = mysqli_query($db, $query);

            if($resultado){
                echo 'Insertado Correctamente';
            }
        }



        // echo '<pre>';
        // echo var_dump($errores);
        // echo '</pre>';




    }



?>

    <main class="contenedor seccion">
        <h1>CREAR</h1>

        <a href="/admin/index.php" class="boton-verde" >Volver</a>

        <?php foreach ($errores as $error): ?>
            <div class= "alerta error">
            <?php echo '*'.$error;?>
            </div>
        <?php endforeach ?>

        <div class="formulario-contenedor">
            <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
                <fieldset>
                    <legend>Información General</legend>

                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Título de la propiedad">

                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" min="0">

                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" accept="image/jpeg, image/png">

                    <label for="descripcion">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Descripcion de la propiedad"></textarea>

                </fieldset>

                <fieldset>
                    <legend>Información de la propiedad</legend>

                    <label for="habitaciones">Habitaciones</label>
                    <input type="number" min="0" max="9" id="habitaciones" name="habitaciones" placeholder="Ej.2">

                    <label for="wc">WC</label>
                    <input type="number" min="0" max="9" id="wc" name="wc" placeholder="Ej.4">

                     <label for="estacionamiento">Estacionamientos</label>
                    <input type="number" min="0" max="9" id="estacionamiento" name="estacionamiento" placeholder="Ej.3">
                    
                </fieldset>

                <fieldset>
                    <legend>Información del vendedor</legend>

                    <label for="vendedor">Vendedor</label>
                    <select name="vendedor" id="vendedor">
                        <option value="" disabled selected>-- Selecciona un Vendedor --</option>
                        <option value="1">Antonio Gómez</option>
                        <option value="2">Tom Brady</option>
                    </select>
                </fieldset>

                <input type="submit" value="Crear Propiedad" class="boton boton-verde">
            </form>
        </div>

    </main>

    <?php incluirTemplate('footer'); ?>