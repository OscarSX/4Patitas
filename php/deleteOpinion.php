<?php

    include 'connectionAlt.php';

    $idOpinion= $_REQUEST['idOpinion'];

    $query = "DELETE FROM opinion WHERE idOpinion='$idOpinion'";
    $resultado = $conn->query($query);

    if($resultado){
    header('Location: ../contact-adm.php');
    }
    else{
    echo "ERROR: No se que pasó";
    }

?>
