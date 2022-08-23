<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$idReceta=$_POST["idReceta"];
$nombre=$_POST["nombre"];
$imagen=$_POST["imagen"];
$ingredientes=$_POST["ingredientes"];
$descripcion=$_POST["descripcion"];
//$idUsuario=$_POST["idUsuario"];

$sql="UPDATE recetas SET nombre = '$nombre', imagen = '$imagen', ingredientes = '$ingredientes', descripcion = '$descripcion' WHERE idReceta = '$idReceta'";
$result=mysqli_query($conexion,$sql);

if ($result){
    echo "Receta actualizada";
}else {
    echo "La receta no pudo ser actualizada";
}

?>