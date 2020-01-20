<?php

include 'connectionAlt.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["valNombreCliente"]) && isset($_POST["valApellidosCliente"]) && isset($_POST["valNombreMascota"]) && 
        isset($_POST["valRaza"]) && isset($_POST["valGeneroMascota"]) && isset($_POST["valEdadMascota"]) &&
        isset($_POST["valPesoMascota"]) && isset($_POST["valPadecimiento"]) && isset($_POST["valFechaCita"]) && 
        isset($_POST["valHoraCita"])){
        
        $usuario_idUsuario = $_SESSION["usuario"]["idUsuario"];
        
        $nombreCliente = $_POST["valNombreCliente"];
        $apellidosCliente = $_POST["valApellidosCliente"];
        $telefonoCliente = $_POST["valNoTelefono"];
		$valNombreMascota = $_POST["valNombreMascota"];
		$valRaza = $_POST["valRaza"];
		$valGeneroMascota = $_POST["valGeneroMascota"];
		$valEdadMascota = $_POST["valEdadMascota"];
		$valPesoMascota = $_POST["valPesoMascota"];
		$valPadecimiento = $_POST["valPadecimiento"];
        $valFechaCita = $_POST["valFechaCita"];
        $valHoraCita = $_POST["valHoraCita"];

        $verif = "SELECT nombre, apellidos FROM usuario";
        $answ = $conn->query($verif);
        $row = $answ->fetch(PDO::FETCH_ASSOC);

        if($nombreCliente==$row['nombre'] && $apellidosCliente==$row['apellidos']){
            $sentence = "INSERT INTO cita(usuario_idUsuario, nombreCliente, apellidosCliente, telefonoCliente, nomMascota, razaMascota, generoMascota, edadMascota, pesoMascota, padecimiento, fechaCita, horaCita) 
                  VALUES ('$usuario_idUsuario', '$nombreCliente', '$apellidosCliente', '$telefonoCliente', '$valNombreMascota', '$valRaza', '$valGeneroMascota', '$valEdadMascota', '$valPesoMascota', '$valPadecimiento', '$valFechaCita', '$valHoraCita')";
            $answ = $conn->query($sentence);
            
            if($answ){
                header("location:../date-adm.php");
            }
            else{
                header("location:date-adm.php?error=1");
            }
        }
        else{
            echo'<script type="text/javascript">
                alert("El cliente no existe en la base de datos");
                window.location.href="../date-adm.php";
                </script>';
        }
	}
} else {
    header("location:date-adm.php?error=1");
}