<?php include 'php/cabecera.inc'; ?>
<br>
<br>
¿Ya eres usuario?<br>
<form action="php/logcliente.php" method="post">
	<input type="text" name="usuario" placeholder="Introduce tu usuario">
	<input type="text" name="contrasena" placeholder="Introduce tu contraseña">
	<br>
	<input type="submit">
	<input type="reset">
</form>
¿Eres nuevo usuario?

<?php include 'php/piedepagina.inc'; ?>