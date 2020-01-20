<?php

include 'userController.php';
include 'connectionAlt.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset($_POST["valNombre"]) && isset($_POST["valApellidos"]) && isset($_POST["valGenero"]) && isset($_POST["valFNacimiento"]) &&
		isset($_POST["valNoTelefono"]) && isset($_POST["valEmail"]) && isset($_POST["valPasswd"])){

		$valNombre = $_POST["valNombre"];
		$valApellidos = $_POST["valApellidos"];
		$valGenero = $_POST["valGenero"];
		$valFNacimiento = $_POST["valFNacimiento"];
		$valNoTelefono = $_POST["valNoTelefono"];
		$valEmail = $_POST["valEmail"];
		$valPasswd = $_POST["valPasswd"];
		$privilegio = 0;
		  
		$verif = "SELECT * FROM usuario WHERE email='$valEmail'";
		$answ = $conn->query($verif);

		$row = $answ->fetch();
		
		if($valEmail == $row['email']){
			echo "<script>
					alert('Este correo ya fue registrado');
					window.location='registro.php';
				</script>";
		} else{
			$ban = usuarioControlador::registrar($valNombre,$valApellidos,$valGenero,$valFNacimiento,$valNoTelefono,$valEmail,$valPasswd, $privilegio) ;

			if($ban){

				$usuario = new usuario();

				$usuario = usuarioControlador::get($valEmail,$valPasswd);
				$_SESSION["usuario"] = array(
					"idUsuario" => $usuario->getIdUsuario(),
					"nombre" =>  $usuario->getNombre(),
					"apellidos" =>  $usuario->getApellidos(),
					"telefono" => $usuario->getTelefono(),
					"email" =>  $usuario->getEmail(),
					"privilegio" =>  $usuario->getPrivilegio()
				);

				header("location:signout.php");
			}
		}
	}
} else {
    header("location:registro.php?error=1");
}