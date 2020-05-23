<html>
<head>
	<title>Libro de direcciones</title>
    <meta charset="UTF-8" />
</head>
<body>
<h1>Libro de direcciones</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=cree">Agregar una nueva dirección.</a></p>
<?php
if (!empty($_GET['mensaje'])) {
    echo "<p>{$_GET['mensaje']}</p>";
}
?>
<table summary="Tabla de direcciones personales para contactos." border="1"><caption align="bottom">Direcciones Personales</caption>
<tbody>
<tr><th scope="col">Nombre</th><th scope="col">Apellidos</th><th scope="col">Teléfono de la Casa</th><th scope="col">Dirección de la Casa</th><th scope="col">Teléfono del Trabajo</th><th scope="col">Dirección del Trabajo</th><th scope="col">Correo Electrónico</th><th scope="col">&nbsp;</th><th scope="col">&nbsp;</th></tr>
<?php
foreach ($direcciones as $direccion)
{
?>
   <tr>
        <td><?php echo $direccion->nombre; ?></td>
        <td><?php echo $direccion->apellidos; ?></td>
        <td><?php echo $direccion->telefono_casa; ?></td>
        <td><?php echo $direccion->direccion_casa; ?></td>
        <td><?php echo $direccion->telefono_trabajo; ?></td>
        <td><?php echo $direccion->direccion_trabajo; ?></td>
        <td><a href="mailto:<?php echo $direccion->correo; ?>"><?php echo $direccion->correo; ?></a></td>
        <td><a href="?id=<?php echo $direccion->correo; ?>&amp;action=edite">Editar</a></td>
        <td><a href="?id=<?php echo $direccion->correo; ?>&amp;action=borre">Borrar</a></td>
    </tr>
<?php
}
?>
</tbody>
</table>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=cree">Agregar una nueva dirección.</a></p>
</body>
</html>