<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$nombre=$_POST["nombre"];
$imagen=$_POST["imagen"];
$precio=$_POST["precio"];
$idUsuario=$_POST["idUsuario"];

$sql="INSERT INTO bebidas(nombre, imagen, precio, idUsuario) VALUES ('$nombre', '$imagen', '$precio', '$idUsuario')";
$result=mysqli_query($conexion,$sql);

if ($result){
    echo "Bebida insertada";
}else {
    echo "La bebida no pudo ser insertada";
}

?>