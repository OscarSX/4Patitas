<?php

include 'connectionAlt.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["subject"]) && isset($_POST["message"])){
        
        $usuario_idUsuario = $_SESSION["usuario"]["idUsuario"];

		$asunto = $_POST["subject"];
		$mensaje = $_POST["message"];
		  
		$verif = "INSERT INTO opinion(usuario_idUsuario, asunto, mensaje, fecha) 
                  VALUES ('$usuario_idUsuario', '$asunto', '$mensaje', NOW())";
		$answ = $conn->query($verif);
        
        if($answ){
            header("location:../contact.php");
        }
        else{
            header("location:contact.php?error=1");
        }
	}
} else {
    header("location:contact.php?error=1");
}