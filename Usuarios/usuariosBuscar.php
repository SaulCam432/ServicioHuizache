<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$email=$_POST["email"];

$busqueda="SELECT email FROM usuarios WHERE email = '$email'";
$re=mysqli_query($conexion,$busqueda);

if (mysqli_num_rows($re) == 0){
    echo "No hay registro";
}else {
    echo "El correo electronico ya fue registrado";
}
?>