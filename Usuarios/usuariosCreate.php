<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");
$nombre=$_POST["nombre"];
$apellidoPaterno=$_POST["apellidoPaterno"];
$apellidoMaterno=$_POST["apellidoMaterno"];
$username=$_POST["username"];
$email=$_POST["email"];
$psw=$_POST["psw"];

$sql="INSERT INTO usuarios(nombre, apellidoPaterno, apellidoMaterno, username, email, psw) VALUES ('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$username', '$email', '$psw')";
$result=mysqli_query($conexion,$sql);

if ($result){

    echo "Usuario insertado";
}else {
    echo "Usuario no insertado";
}
?>