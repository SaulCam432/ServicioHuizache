<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$idBebida=$_POST["idBebidas"];
$nombre=$_POST["nombre"];
$imagen=$_POST["imagen"];
$precio=$_POST['precio'];
//$idUsuario=$_POST["idUsuario"];

$sql="UPDATE bebidas SET nombre = '$nombre', imagen = '$imagen', precio = '$precio' WHERE idBebidas = '$idBebida'";
$result=mysqli_query($conexion,$sql);

if ($result){
    echo "Bebida actualizada";
}else {
    echo "La bebida no pudo ser actualizada";
}

?>