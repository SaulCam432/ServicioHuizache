<?php
$conexion = mysqli_connect("localhost","root","","bdhuizache");


if (mysqli_connect_errno()){
    echo "error en conectar: " . mysqli_connect_errno();
    die();
}

$idRecetaI=$_GET['idReceta'];
$stm = $conexion->prepare("SELECT idReceta,nombre,imagen,ingredientes,descripcion,idUsuario FROM recetas WHERE idReceta = '$idRecetaI';");
$stm->execute();
$stm->bind_result($idReceta,$nombre,$imagen,$ingredientes,$descripcion,$idUsuario);

$recetas =array();

while($stm->fetch()){
    $index=array();
    $index['idReceta']=$idReceta;
    $index['nombre'] = $nombre;
    $index['imagen'] = $imagen;
    $index['ingredientes'] = $ingredientes;
    $index['descripcion'] = $descripcion;
    $index['idUsuario'] = $idUsuario;
    array_push($recetas, $index);
}

echo json_encode($recetas);
mysqli_close($conexion);
?>