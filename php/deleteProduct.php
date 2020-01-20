<?php

    include 'connectionAlt.php';

    $idProducto= $_REQUEST['idProd'];

    $query = "DELETE FROM producto WHERE idProducto='$idProducto'";
    $resultado = $conn->query($query);

    if($resultado){
    header('Location: ../store-adm.php');
    }
    else{
    echo "ERROR: No se que pasó";
    }

?>
