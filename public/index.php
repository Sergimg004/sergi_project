<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Mysql mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="style.css" rel="stylesheet">
</head>

<body>
<div class="main-wrapper">
<h1>Listado Proveedores </h1>
<br><br>

<?php
	include("function.php");
?>
<table border="1" width="100%">
	<tr>
		<th width="10%">Nombre</th>
		<th width="20%">Correo</th>
		<th width="20%">Número</th>
		<th width="10%">Proveedor</th>
		<th width="20%">Estado</th>
		<th width="30%">Fecha Creación</th>


	</tr>
<?php 
	$sql = "select * from proveedor";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->nombre;?></td>
		<td><?php echo $row->correo;?></td>
		<td><?php echo $row->numero;?></td>
		<td><?php echo $row->tipo;?></td>
		<td><?php if ($row->activo=="0"){echo "Inactivo";} else {echo "Activo";}?></td>
		<td><?php echo $row->fecha_creacion;?></td>
		<td>
		<a class="btn btn-success" role="button" href="editar.php?id=<?php echo $row->id; ?>">Editar</a>
		<a class="btn btn-danger" role="button" href="borrar.php?id=<?php echo $row->id;?>">Borrar</a>
		</td>
	</tr>
	<?php } ?>
</table>

<a class="btn btn-primary" role="button" href="editar.php">Crear</a>


</div>

<!--          
	<form action="editar.php">
		<label for="fname">ID</label><br>
		<input type="text" id="id" name="id" value="<?php //echo $row->id; ?>"><br>
		<input type="submit" > 
	</form> -->
</body>
</html>