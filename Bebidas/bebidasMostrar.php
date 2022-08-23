<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");


if (mysqli_connect_errno()){
    echo "error en conectar: " . mysqli_connect_errno();
    die();
}
$idUsuarioI=$_GET['idUsuario'];
$stm = $conexion->prepare("SELECT idBebidas,nombre,imagen,precio,idUsuario FROM bebidas WHERE idUsuario = '$idUsuarioI';");

$stm->execute();
$stm->bind_result($idBebida,$nombre,$imagen,$precio,$idUsuario);

$bebidas =array();

while($stm->fetch()){
    $index=array();
    $index['idBebidas'] = $idBebida;
    $index['nombre'] = $nombre;
    $index['imagen'] = $imagen;
    $index['precio'] = $precio;
    $index['idUsuario'] = $idUsuario;
    array_push($bebidas, $index);
}

echo json_encode($bebidas);
mysqli_close($conexion);
?>