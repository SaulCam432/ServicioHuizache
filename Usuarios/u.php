<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");

$email=$_GET["email"];
$psw=$_GET["psw"];

$sql="SELECT * FROM usuarios WHERE email = '$email' AND psw = '$psw'";
$result=mysqli_query($conexion,$sql);
$result->execute();

if ($result->num_rows >0){
    echo "Sesión iniciada";
    $comando = $conexion->prepare($sql);
	$comando->execute(array($email));
	$row = $comando->fetch(PDO::FETCH_ASSOC);
	$json['usuarios'][]=$row;
}else {
    echo "Los datos ingresados no son validos";
}
?>                   
                    
                    
                    
                    