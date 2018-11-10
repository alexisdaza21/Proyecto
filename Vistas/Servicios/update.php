<!DOCTYPE html>
<html>
<head>
    <title>modficar</title>
</head>
<body>
	<form action="" method="post">
		<label>Producto:</label>
		<select name="servicios[producto]">
			<option value="<?= $servicio->producto ?>"><?= $servicio->producto ?></option>
		</select>

		<label>Precio:</label>
		<input type="number" name="servicios[precio]" value="<?= $servicio->precio ?>" required="">

		<label>Solicitud:</label>
		<input type="date" name="servicios[solicitud]" value="<?= $servicio->solicitud ?>" required="">

		<label>alquiler:</label>
		<select name="servicios[alquiler]">
			<option value="<?= $servicio->alquiler ?>"><?= $servicio->alquiler ?></option>
		</select>

		<input type="hidden" name="id" value="<?= $servicio->id_servicio ?>">

		<button type="submit">guardar servicio</button>
	</form>
</body>
</html>