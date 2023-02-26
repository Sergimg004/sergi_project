<?php 
include("function.php");
$id = $_GET['id'];
$query="DELETE FROM proveedor WHERE id = ".$id.";";
$res=db_query($query);
header("location:index.php");

?>
