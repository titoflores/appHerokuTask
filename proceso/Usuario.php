<?php
//require_once '../Controllers/UsuarioControllers.php';

$idUsuario= $_GET['idUsuario'];
$nombreUsuario= $_GET['nombreUsuario'].'PHP';
$claveUsuario= $_GET['claveUsuario'].'PHP';

        
$data= array("idUsuario" => "$idUsuario" ,"nombreUsuario" => "$nombreUsuario","claveUsuario" => "$claveUsuario");
echo json_encode($data);