<?php
// Esto reemplaza la conexión real y la consulta SQL
function obtenerUsuarios() {
    // Datos fake, escritos a mano
    $usuarios = [
        ["id" => 1, "nombre" => "Juan Perez", "email" => "juan@mail.com"],
        ["id" => 2, "nombre" => "Maria Lopez", "email" => "maria@mail.com"],
        ["id" => 3, "nombre" => "Carlos Ruiz", "email" => "carlos@mail.com"],
    ];

    return $usuarios;
}
?>
