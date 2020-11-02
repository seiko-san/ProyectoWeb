<?php

require_once '../conexion/Conexion.php';


$nick = $_POST["nick"];
$clave = $_POST["clave"];

session_start();

//$_SESSION['nick'] = $nick;

$SQL = "select * from cliente where nick_cliente = '$nick' and clave_cliente = '$clave'";

//var_dump($SQL);
//die();

$consulta = mysqli_query($conexion, $SQL);

$filas = mysqli_num_rows($consulta);

if($filas){
    
    $_SESSION['nick'] = $nick;
    header("Location:http://localhost/ProyectoWeb/vista/panel.php");
   
}else{
    
    header("Location:http://localhost/ProyectoWeb/vista/login.php");
    
}
    
    

mysqli_free_result($consulta);
mysqli_close($conexion);

 ?>