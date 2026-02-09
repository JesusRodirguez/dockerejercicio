<?php
require_once "modulo.php";
$usuarios = obtenerUsuarios();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP + MySQL</title>
</head>
<body>

<h2>Nuevo Usuario</h2>
<form method="POST" action="controlador.php">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit">Guardar</button>
</form>

<h2>Lista de Usuarios</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
    </tr>

    <?php foreach ($usuarios as $u): ?>
    <tr>
        <td><?= $u["id"] ?></td>
        <td><?= $u["nombre"] ?></td>
        <td><?= $u["email"] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
