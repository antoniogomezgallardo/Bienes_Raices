<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienes_raices_crud' );

    if(!$db){
        echo 'La conexión no se pudo establecer';
        exit;
    }

    return $db;
}