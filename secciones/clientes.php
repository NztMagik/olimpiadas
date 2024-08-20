<?php

include_once "../configuraciones/BD.php";
$conexionBD = BD::crearInstancia();
$listaCliente = array();

$id = isset($_POST['id_clientes']) ? $_POST['id_clientes'] : '';
$dni = isset($_POST['dni_clientes']) ? $_POST['dni_clientes'] : '';
$nombre = isset($_POST['nombre_clientes']) ? $_POST['nombre_clientes'] : '';
$apellido = isset($_POST['apellido_clientes']) ? $_POST['apellido_clientes'] : '';

$buscar = isset($_POST['buscar_cliente']) ? $_POST['buscar_cliente'] : '';

if ($buscar) {
    $consulta = $conexionBD->prepare("SELECT * FROM cliente WHERE id_cliente = :id OR dni = :dni OR nombre = :nombre AND apellido = :apellido");
    $consulta->bindParam(':id', $id);
    $consulta->bindParam(':dni', $dni);
    $consulta->bindParam(':nombre', $nombre);
    $consulta->bindParam(':apellido', $apellido);
    $consulta->execute();
    if ($consulta->rowCount() > 0) {
        $listaCliente = $consulta->fetchAll();
    } else {
        $listaCliente = array(); // No se encontraron resultados
        echo "<script> alert('Datos no encontrados') </script>";
    }
}

?>