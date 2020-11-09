<?php

session_start();
require_once '../conexion/Conexion.php';

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

if ($nombre == '' || $descripcion == '') {

    echo "<div class='alert alert-danger alert-dismissible'>
                  <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                  <h5><i class='icon fas fa-ban'></i> Alert!</h5>
                  Debe completar los datos.
                </div>";
} else {

    $SQL = "insert into categorias(`nombre_categoria`,`descripcion_categoria`) values('$nombre','$descripcion')";
    $resultado = mysqli_query($conexion, $SQL);

    if ($resultado) {
        echo "<div class='alert alert-success alert-dismissible'>
                  <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                  <h5><i class='icon fas fa-ban'></i> Alert!</h5>
                  Datos Guardados.
                </div>";
    } else {
        echo "<div class='alert alert-danger alert-dismissible'>
                  <button type=button class='close data-dismiss=alert aria-hidden=true'>&times;</button>
                  <h5><i class='icon fas fa-ban'></i> Alert!</h5>
                  Problemas al guardar tus datos.
                </div>";
    }
}

