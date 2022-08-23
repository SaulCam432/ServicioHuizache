<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");

$email=$_POST["email"];
$psw=$_POST["psw"];

$sql="SELECT * FROM usuarios WHERE email = '$email' AND psw = '$psw'";
$result=mysqli_query($conexion,$sql);

if ($result->num_rows >0){
    echo "Sesión iniciada";
}else {
    echo "Los datos ingresados no son validos";
}
?>