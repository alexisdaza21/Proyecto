<!DOCTYPE html>
<html>
<head>
    <title>modficar</title>
</head>
<body>
	<form action="" method="post">
		<label>Placa:</label>
		<input type="text" name="vehiculos[placa]" value="<?= $vehiculos->placa ?>" required="">

		<label>Marca:</label>
		<input type="text" name="vehiculos[marca]" value="<?= $vehiculos->marca ?>" required="">

		<label>Servicio:</label>
		<select name="vehiculos[servicio]">
			<option value="<?= $vehiculos->servicio ?>"><?= $vehiculos->Publico ?></option>
            <option value="<?= $vehiculos->servicio ?>"><?= $vehiculos->Particular ?></option>
		</select>

        <label>Registro:</label>
		<input type="date" name="vehiculos[registro]" value="<?= $vehiculos->registro ?>" required="">

		<input type="hidden" name="id" value="<?= $vehiculos->id_cliente ?>">

		<button type="submit">guardar vehiculos</button>
	</form>
</body>
</html>