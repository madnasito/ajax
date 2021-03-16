<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    
    echo "Se ha subido exitosamente <br>";
    echo "Nombre: $nombre, Apellido $apellido";
}else{
    header('Location: index.php');
}


?>
