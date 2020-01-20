<?php

include 'userController.php';

session_start();

//header('Content-type: application/json');
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["valEmail"]) && isset($_POST["valPassword"])) {
        $valUsuario = $_POST["valEmail"];
        $valPassword = $_POST["valPassword"];

        //$resultado = array("estado" => "true");

        if( usuarioControlador::login($valUsuario,$valPassword))
        {

            $usuario = usuarioControlador::get($valUsuario,$valPassword);

            $_SESSION["usuario"] = array(
                "idUsuario" => $usuario->getIdUsuario(),
                "nombre" =>  $usuario->getNombre(),
                "apellidos" =>  $usuario->getApellidos(),
                "telefono" => $usuario->getTelefono(),
                "email" =>  $usuario->getEmail(),
                "privilegio" =>  $usuario->getPrivilegio()
            );
            //return print(json_encode($resultado));
        }
    }
}

//$resultado = array("estado" => "false");
//return print(json_encode($resultado));

if(!isset($_SESSION["usuario"])){
        echo'<script type="text/javascript">
        alert("El correo o la contraseña son incorrectos");
        window.location.href="../login.php";
        </script>';
  }
  else
  {
		header("location:../index.php");
  }

?>
