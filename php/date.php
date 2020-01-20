<?php

include 'connectionAlt.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["valNombreMascota"]) && isset($_POST["valRaza"]) && isset($_POST["valGeneroMascota"]) && isset($_POST["valEdadMascota"]) &&
        isset($_POST["valPesoMascota"]) && isset($_POST["valPadecimiento"]) && isset($_POST["valFechaCita"]) && isset($_POST["valHoraCita"])){
        
        $usuario_idUsuario = $_SESSION["usuario"]["idUsuario"];
        $nombreCliente = $_SESSION["usuario"]["nombre"];
        $apellidosCliente = $_SESSION["usuario"]["apellidos"];
        $telefonoCliente = $_SESSION["usuario"]["telefono"];
        
		$valNombreMascota = $_POST["valNombreMascota"];
		$valRaza = $_POST["valRaza"];
		$valGeneroMascota = $_POST["valGeneroMascota"];
		$valEdadMascota = $_POST["valEdadMascota"];
		$valPesoMascota = $_POST["valPesoMascota"];
		$valPadecimiento = $_POST["valPadecimiento"];
        $valFechaCita = $_POST["valFechaCita"];
        $valHoraCita = $_POST["valHoraCita"];
		  
		$verif = "INSERT INTO cita(usuario_idUsuario, nombreCliente, apellidosCliente, telefonoCliente, nomMascota, razaMascota, generoMascota, edadMascota, pesoMascota, padecimiento, fechaCita, horaCita) 
                  VALUES ('$usuario_idUsuario', '$nombreCliente', '$apellidosCliente', '$telefonoCliente', '$valNombreMascota', '$valRaza', '$valGeneroMascota', '$valEdadMascota', '$valPesoMascota', '$valPadecimiento', '$valFechaCita', '$valHoraCita')";
		$answ = $conn->query($verif);
        
        if($answ){
            header("location:../date.php");
        }
        else{
            header("location:date.php?error=1");
        }
	}
} else {
    header("location:date.php?error=1");
}