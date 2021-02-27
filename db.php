<?php
session_start();
//Se crea una variable que guarda la conexion con la base de datos
$conn = mysqli_connect(
'localhost', //Conexion local
'root', //nombre del usuario
'',// Contraseña
'registro' //nombre de la base datos
);
?>