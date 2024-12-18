<?php
    // Conexión a la BBDD 
        require '../../includes/config/database.php';
        $db = conectarDB();
        //var_dump($db);

    // Añadir Header
        require '../../includes/funciones.php';
        incluirTemplate('header');

    // Leer datos de la BBDD
        $consulta = "SELECT * FROM vendedores";
        $resultado = mysqli_query($db, $consulta);
    

    //Insertar datos en la BBDD

        // inicializo variables 

        $titulo = '';
        $precio = '';
        $descripcion= '';
        $habitaciones= '';
        $wc= '';
        $estacionamiento= '';
        $vendedores_id= '';
        $creado= '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' ){

/*      echo '<pre>';
        echo var_dump($_POST);
        echo '</pre>'; */

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion= $_POST['descripcion'];
        $habitaciones= $_POST['habitaciones'];
        $wc= $_POST['wc'];
        $estacionamiento= $_POST['estacionamiento'];
        $vendedores_id= $_POST['vendedor'];
        $creado = date('Y-m-d');


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
            $query = "INSERT INTO propiedades( titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) 
                        VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id') ";

             /* echo $query;  */

            // Mandar consulta a la bbdd
            $resultado = mysqli_query($db, $query);

            // Validar el INSERT en la BBDD
            if($resultado){
                
                // redireccionar al usuario para evitar multiples inserts
                header('Location: /admin'); 
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
                    <input type="text" id="titulo" name="titulo" placeholder="Título de la propiedad" value="<?php echo $titulo; ?>">

                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" min="0" value="<?php echo $precio; ?>">

                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" accept="image/jpeg, image/png">

                    <label for="descripcion">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Descripcion de la propiedad"> <?php echo $descripcion; ?> </textarea>

                </fieldset>

                <fieldset>
                    <legend>Información de la propiedad</legend>

                    <label for="habitaciones">Habitaciones</label>
                    <input type="number" min="0" max="9" id="habitaciones" name="habitaciones" placeholder="Ej.2" value="<?php echo $habitaciones; ?>">

                    <label for="wc">WC</label>
                    <input type="number" min="0" max="9" id="wc" name="wc" placeholder="Ej.4" value="<?php echo $wc; ?>">

                     <label for="estacionamiento">Estacionamientos</label>
                    <input type="number" min="0" max="9" id="estacionamiento" name="estacionamiento" placeholder="Ej.3" value="<?php echo $estacionamiento; ?>">
                    
                </fieldset>

                <fieldset>
                    <legend>Información del vendedor</legend>

                    <label for="vendedor">Vendedor</label>
                    <select name="vendedor" id="vendedor" value="<?php echo $vendedores_id; ?>">
                        <option value="" disabled selected>-- Selecciona un Vendedor --</option>
                        
                        <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?>

                            <option  <?php echo ($vendedores_id === $vendedor["id"]) ? 'selected' : ''; ?>   value="<?php echo $vendedor["id"]; ?>"><?php echo $vendedor["nombre"] . " " . $vendedor["apellido"] ?></option>

                        <?php endwhile; ?>

                    </select>
                </fieldset>

                <input type="submit" value="Crear Propiedad" class="boton boton-verde">
            </form>
        </div>

    </main>

    <?php incluirTemplate('footer'); ?>