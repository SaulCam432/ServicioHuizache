<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");


if (mysqli_connect_errno()){
    echo "error en conectar: " . mysqli_connect_errno();
    die();
}

$email=$_GET['email'];
$psw=$_GET['psw'];
$stm = $conexion->prepare("SELECT idUsuario FROM usuarios WHERE email = '$email' AND psw = '$psw';");
$stm->execute();
$stm->bind_result($idUsuario);

$recetas =array();

while($stm->fetch()){
    $index=array();
    $index['idUsuario']=$idUsuario;
    array_push($recetas, $index);
}

echo json_encode($recetas);
mysqli_close($conexion);
?>