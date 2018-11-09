<?php include("Vistas/header.php")?>

	<?php if (isset(($_GET["error"]))) {
		echo "<h3>Datos incorrectos</h3>";
	}?>
	<form action="index.php?c=home&a=login" method="POST" name="Login">
		<label>Documento:</label>
		<input type="text" name="Login[Documento]">
		<label>Contrasena:</label>
		<input type="password" name="Login[pas]">
		<button type="submit">Ingresar</button>
	</form>
</body>
</html>