<!DOCTYPE html>
<html>
<head>
	<title>Listado de servicios</title>
</head>
<body>
	 <a href="index.php?c=servicios&a=create">Agregar</a>
        <!-- 
        <form action="index.php?c=usuarios&a=view" method="POST">
        <input name="consulta" placeholder="Ingresa documento">
        <button type="submit">Consultar</button>
        </form> 
    	-->
	<table border="2">            
		<tbody>
			<tr>
				<th>Id</th>
				<th>Producto</th>
				<th>precio</th>
				<th>solicitud</th>
				<th>alquiler</th>
				<th>Acciones</th>
			</tr>
			<?php foreach($servicios as $servicios){ ?>
			<tr>
				<td><?= $servicios->id_servicio; ?></td>
				<td><?= $servicios->producto; ?></td>
				<td><?= $servicios->precio; ?></td>
				<td><?= $servicios->solicitud; ?></td>
				<td><?= $servicios->alquiler; ?></td>
				<td> 
<<<<<<< HEAD
                    <a href="index.php?c=servicios&a=update&id=<?=$servicios->id_servicio ?>">Editar</a> 
                    <a href="index.php?c=servicios&a=delete&id=<?=$servicios->id_servicio ?>">Eliminar</a>
=======
                    <a href="index.php?c=usuarios&a=update&id=<?=$usuario->id_usuarios ?>">Editar</a> 
                    <a href="index.php?c=usuarios&a=delete&id=<?=$usuario->id_usuarios ?>">Eliminar</a>
>>>>>>> 9c2057ad5af31f2d5b56ae901786246094a7210e
                </td>
			</tr>
			<?php } ?>
</body>
</html>