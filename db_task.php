<?php

/* Conectar auna base de datos de ODBC usando un alias */
//$dsn = 'php_crud';
$dsn = 'mysql:dbname=php_crud;host=127.0.0.1';
$usuario = 'root';
$contraseña = 'cardenas15';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
    echo 'Conexión Exitosa ';
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}









// $conn = mysqli_connet(
//     'localhost',
//     'root',
//     'cardenas1501993',
//     'php_crud'
    
// );

// if (isset($conn)) {
//     # code...
//     echo "La conexion fue exitosa";
// }else{
//     echo "Error en la conexion";
// }

?>