<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$idBebida=$_POST["idBebidas"];

$sql="DELETE FROM bebidas WHERE idBebidas = '$idBebida'";
$result=mysqli_query($conexion,$sql);

if ($result){
    echo "Bebida Borrada";
}else {
    echo "La bebida no pudo ser borrada";
}

?>