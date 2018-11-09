<!DOCTYPE html>
<html>
<head>
	<title>Crear servicio</title>
</head>
<body>
	<form action="" method="post">
		<label>Producto:</label>
		<select name="servicios[producto]">
			<option value="1">Gaseosa</option>
		</select>

		<label>Precio:</label>
		<input type="number" name="servicios[precio]" value="" required="">

		<label>Solicitud:</label>
		<input type="date" name="servicios[solicitud]" value="" required="">

		<label>alquiler:</label>
		<select name="servicios[alquiler]">
			<option value="1">num.01</option>
		</select>

		<button type="submit">Crear servicio</button>
	</form>
</body>
</html>