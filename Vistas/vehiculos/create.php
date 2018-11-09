<!DOCTYPE html>
<html>
<head>
	<title>Crear vehiculos</title>
</head>
<body>
	<form action="" method="post">
		<label>Placa:</label>
		<input   type="text"   name="vehiculos[placa]" value="" required=""/>	
		
		<label>Marca:</label>
		<input type="text" name="vehiculos[marca]" value="" required=""/>

		<label>Servicio:</label>
		<select name="vehiculos[servicio]">
			<option value="Publico">Publico</option>
			<option value="Particular">Particular</option>
		</select>

		<label>Registro:</label>
		<input type="date" name="vehiculos[registro]" value="" required=""/>

		<button type="submit">Crear vehiculos</button>
	</form>
</body>
</html>