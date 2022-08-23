<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$idReceta=$_POST["idReceta"];

$sql="DELETE FROM recetas WHERE idReceta = '$idReceta'";
$result=mysqli_query($conexion,$sql);

if ($result){
    echo "Receta Borrada";
}else {
    echo "La receta no pudo ser borrada";
}

?>