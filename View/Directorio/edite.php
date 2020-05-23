<html>
<head>
	<title>Editar dirección</title>
    <meta charset="UTF-8" />
</head>
<body>
<h1>Edite dirección</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=index">Regresar al listado de direcciones.</a></p>
<form name="direccion" id="direccion" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="action" type="hidden" value="cree" />
  <p>Este formulario le permite enviar comentarios sobre este sitio.</p>
  <p>Nombre:
    <input name="nombre" type="text" id="nombre" size="51" maxlength="50" value="<?php echo $direccion['nombre']; ?>" />
  </p>
  <p>Apellidos:
    <input name="apellidos" type="text" id="apellidos" size="51" maxlength="50" value="<?php echo $direccion['apellidos']; ?>" />
  </p>
  <p>Teléfono de la casa:
    <input name="telefono_casa" type="text" id="telefono_casa" size="51" maxlength="50" value="<?php echo $direccion['telefono_casa']; ?>" />
  </p>
  <p>Dirección de la casa:
    <input name="direccion_casa" type="text" id="direccion_casa" size="51" maxlength="50" value="<?php echo $direccion['direccion_casa']; ?>" />
  </p>
  <p>Teléfono del trabajo:
    <input name="telefono_trabajo" type="text" id="telefono_trabajo" size="51" maxlength="50" value="<?php echo $direccion['telefono_trabajo']; ?>" />
  </p>
  <p>Dirección del trabajo:
    <input name="direccion_trabajo" type="text" id="direccion_trabajo" size="51" maxlength="50" value="<?php echo $direccion['direccion_trabajo']; ?>" />
  </p>
  <p>Correo electr&oacute;nico:
    <input name="correo" type="text" id="correo" size="51" maxlength="50" value="<?php echo $direccion['correo']; ?>" />
  </p>

  <p>
    <input name="Guardar" type="submit" value="Guardar" />
  </p>
</form>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=index">Regresar al listado de direcciones.</a></p>
</body>
</html>