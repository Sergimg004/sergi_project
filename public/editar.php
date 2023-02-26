<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
</head>

<body>
<div class="main-wrapper">

<?php 
include("function.php");


if(isset($_GET['id'])){
	
	?>
	<h1>Editar Registro</h1>
<br><br>
<?php
	$id = $_GET['id'];
	//select_id('proveedor','id',$id);
	$query="SELECT * FROM proveedor WHERE id = ".$id.";";
	$res=db_query($query);
	$row = mysqli_fetch_object($res);

	?>
		<form action="" method="post">
			<label for="nombre">Nombre</label>
			<input type="text" value="<?php echo $row->nombre;?>" name="nombre">
			<br>
			<label for="correo">Correo</label>
			<input type="email" value="<?php echo $row->correo;?>" name="correo">
			<br>
			<label for="numero">Número teléfono</label>
			<input type="number" value="<?php echo $row->numero;?>" name="numero">
			<br>
			<label for="tipo">Tipo Proveedor</label>
			<select value="<?php echo $row->tipo;?>" name="tipo" >	
				<option value="hotel" selected>hotel</option>
				<option value="pista">pista</option>
				<option value="complemento">complemento</option>
			</select>
			<br>
			<label for="activo">Estado</label>
			<select value="<?php echo $row->activo;?>" name="activo">	
				<option value="1" selected>Activo</option>
				<option value="0">Inactivo</option>
			</select>

			<input type="submit" name="submit">
		</form>
<?php 	

if(isset($_POST['submit'])){
		$field = array("nombre"=>$_POST['nombre'], "correo"=>$_POST['correo'], "numero"=>$_POST['numero'], "tipo"=>$_POST['tipo'], "activo"=>$_POST['activo']);
		$tbl = "proveedor";
		//edit($tbl,$field,'id',$id);
		
		$query="UPDATE proveedor SET nombre='".$_POST['nombre']."', correo= '".$_POST['correo']."', numero= '".$_POST['numero']."', tipo='".$_POST['tipo']."', activo='".$_POST['activo']."' WHERE id = ".$id.";";
		echo $query;
		db_query($query);
		
		header("location:index.php");
	}
}
else{
	?>
	<h1>Crear Registro</h1>
<br><br>
		<form action="" method="post">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre">
			<br>
			<label for="correo">Correo</label>
			<input type="email" name="correo">
			<br>
			<label for="numero">Número teléfono</label>
			<input type="text"  name="numero">
			<br>
			<label for="tipo">Tipo Proveedor</label>
			<select name="tipo">	
				<option value="hotel" selected>hotel</option>
				<option value="pista">pista</option>
				<option value="complemento">complemento</option>
			</select>
			<br>
			<label for="activo">Estado</label>
			<select name="activo">	
				<option value="1" selected>Activo</option>
				<option value="0">Inactivo</option>
			</select>			
			<input type="submit" name="submit">
		</form>
		<?php
		if(isset($_POST['submit'])){

		$query="INSERT INTO proveedor (nombre, correo, numero, tipo, activo) VALUES ('".$_POST['nombre']."', '".$_POST['correo']."', '".$_POST['numero']."', '".$_POST['tipo']."', '".$_POST['activo']."');";
		db_query($query);
		
		
		
		header("location:index.php");
		}
		
		
		
		
	}

	
	

?>
</div>
</body>
</html>