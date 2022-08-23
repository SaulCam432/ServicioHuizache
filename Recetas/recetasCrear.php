<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$nombre=$_POST["nombre"];
$imagen=$_POST["imagen"];
$ingredientes=$_POST["ingredientes"];
$descripcion=$_POST["descripcion"];
$idUsuario=$_POST["idUsuario"];

$sql="INSERT INTO recetas(nombre, imagen, ingredientes, descripcion, idUsuario) VALUES ('$nombre', '$imagen', '$ingredientes', '$descripcion', '$idUsuario')";
$result=mysqli_query($conexion,$sql);

if ($result){
    echo "Receta insertada";
}else {
    echo "La receta no pudo ser insertada";
}

?>