<?php

    include 'connectionAlt.php';

    $idCita= $_REQUEST['idCita'];

    $query = "DELETE FROM cita WHERE idCita='$idCita'";
    $resultado = $conn->query($query);

    if($resultado){
    header('Location: ../date.php');
    }
    else{
    echo "ERROR: No se que pasó";
    }

?>
