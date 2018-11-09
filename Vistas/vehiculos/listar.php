<!DOCTYPE html>
<html>
<head>
	<title>Listado de vehiculos</title>
</head>
<body>
	 <a href="index.php?c=vehiculos&a=create">Agregar</a>
    
	<table border="2">            
		<tbody>
			<tr>
				<th>Id</th>
				<th>Placa</th>
				<th>Marca</th>
				<th>Servicio</th>
				<th>Registro</th>
				<th>Acciones</th>
			</tr>
			<?php foreach($vehiculos as $vehiculos){ ?>
			<tr>
				<td><?= $vehiculos->id_cliente; ?></td>
				<td><?= $vehiculos->placa; ?></td>
				<td><?= $vehiculos->marca; ?></td>
				<td><?= $vehiculos->servicio; ?></td>
				<td><?= $vehiculos->registro; ?></td>
				<td> 
                    <a href="index.php?c=vehiculos&a=update&id=<?=$vehiculos->id_cliente ?>">Editar</a> 
                    <a href="index.php?c=vehiculos&a=delete&id=<?=$vehiculos->id_cliente ?>">Eliminar</a>
                </td>
			</tr>
			<?php } ?>
</body>
</html>