<?php
include 'connectionAlt.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if(isset($_POST["valNombre"]) && isset($_POST["valPrecio"]) && isset($_POST["valDescripcion"])){
            
            $idProducto = $_REQUEST['idProd'];
            $nom = $_POST["valNombre"];
            $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $pr = $_POST["valPrecio"];
            $desc = $_POST["valDescripcion"];
    
            $query = "UPDATE producto SET nombre='$nom', imagen='$img', precio='$pr', descripcion='$desc' WHERE idProducto='$idProducto'";
            $resultado = $conn->query($query);
    
            if($resultado){
                //echo "se guardo!!!";
                header("location:../store-adm.php");
            } else{
                echo "error";
            }
    
        }
    } else {
        header("location:../store-adm.php?error=1");
    }

?>
