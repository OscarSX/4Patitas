<?php
include 'connectionAlt.php';

session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if(isset($_POST["valNombreCliente"]) && isset($_POST["valApellidosCliente"]) && isset($_POST["valNombreMascota"]) && 
        isset($_POST["valRaza"]) && isset($_POST["valGeneroMascota"]) && isset($_POST["valEdadMascota"]) &&
        isset($_POST["valPesoMascota"]) && isset($_POST["valPadecimiento"]) && isset($_POST["valFechaCita"]) && 
        isset($_POST["valHoraCita"])){
            
            $idCita = $_REQUEST['idCita'];
            
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
    
            $query = "UPDATE cita SET nombreCliente='$nombreCliente', apellidosCliente='$apellidosCliente', telefonoCliente='$telefonoCliente',
                        nomMascota='$valNombreMascota', razaMascota='$valRaza', generoMascota='$valGeneroMascota',
                        edadMascota='$valEdadMascota', pesoMascota='$valPesoMascota', padecimiento='$valPadecimiento',
                        fechaCita='$valFechaCita', horaCita= '$valHoraCita' WHERE idCita='$idCita'";

            $resultado = $conn->query($query);
    
            if($resultado){
                //echo "se guardo!!!";
                header("location:../date-adm.php");
            } else{
                echo "error";
            }
    
        }
    } else {
        //header("location:updateDate.php?error=1");
    }

?>
