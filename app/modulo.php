<?php
require_once "conexion.php";

function obtenerUsuarios() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM usuarios");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insertarUsuario($nombre, $email) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
    $stmt->execute([$nombre, $email]);
}
?>