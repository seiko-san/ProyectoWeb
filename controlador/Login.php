<?php

require_once '../conexion/Conexion.php';


$nick = $_POST["nick"];
$clave = $_POST["clave"];

session_start();

//$_SESSION['nick'] = $nick;

$SQL = "select usuarios.nick_cliente, usuarios.clave_cliente, perfiles.codigo_perfil, perfiles.nombre_perfil from usuarios inner join perfiles on perfiles.codigo_perfil = usuarios.codigo_perfil where nick_cliente = '$nick' and clave_cliente = '$clave'";

//var_dump($SQL);
//die();

$consulta = mysqli_query($conexion, $SQL);
/*Recordad que en la base de datos cambiar los campos cliente por usuario*/
if($consulta->num_rows > 0){
    $row = $consulta->fetch_array(MYSQLI_ASSOC);
    $nombre_usuario = $row['nick_cliente'];
    $codigo_perfil = $row['codigo_perfil'];
    $nombre_perfil = $row['nombre_perfil'];
    
    //var_dump($nombre_usuario,$nombre_perfil);
    
    if($codigo_perfil== 1){
        $_SESSION['nick_cliente'] = $nombre_usuario;
        $_SESSION['nombre_perfil'] = $nombre_perfil;
        header("Location:http://localhost/ProyectoWeb/vista/Panel_administrador.php");
    }else{
        $_SESSION['nick_cliente'] = $nombre_usuario;
        $_SESSION['nombre_perfil'] = $nombre_perfil;
        header("Location:http://localhost/ProyectoWeb/vista/panel.php");
    } 
    
}else{
    header("Location:http://localhost/ProyectoWeb/vista/login.php");
}


//$filas = mysqli_num_rows($consulta);

//$row = ·$filas->fetch_array(MYSQLI_ASSOC);

//var_dump($c);


//die();
//if($filas){
//    
//    $_SESSION['nick'] = $nick;
//    header("Location:http://localhost/ProyectoWeb/vista/panel.php");
//   
//}else{
//    
//    header("Location:http://localhost/ProyectoWeb/vista/login.php");
//    
//}
//    
    

mysqli_free_result($consulta);
mysqli_close($conexion);

 ?>