<?php
include 'connectionAlt.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
	if(isset($_POST["valNombre"]) && isset($_FILES['image']) && isset($_POST["valPrecio"]) && isset($_POST["valDescripcion"])){

        $nom = $_POST["valNombre"];
        $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $pr = $_POST["valPrecio"];
        $desc = $_POST["valDescripcion"];

        $query = "INSERT INTO producto(nombre, imagen, precio, descripcion) values ('$nom', '$img', '$pr', '$desc')";
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