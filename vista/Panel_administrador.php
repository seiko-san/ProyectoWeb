<?php

session_start();

if(!isset($_SESSION["nick_cliente"]))
{
    header("Location: login.php");
}
?>

