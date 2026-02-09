<?php
require_once "modulo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insertarUsuario($_POST["nombre"], $_POST["email"]);
    header("Location: vista.php");
}
?>