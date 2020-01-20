<?php

include 'userDao.php';
class usuarioControlador{

	public static function get($email , $password){
		$obj_usuario1 = new usuario();
		$obj_usuario1->setEmail($email);
		$obj_usuario1->setPassword($password);

		return usuarioDao::get($obj_usuario1);
	}

	public static function registrar($nombre,$apellidos,$genero,$fNacimiento,$telefono,$email,$password,$privilegio){
		$obj_usuario2 = new usuario();

		$obj_usuario2 ->setNombre($nombre);
		$obj_usuario2 ->setApellidos($apellidos);
		$obj_usuario2 ->setGenero($genero);
		$obj_usuario2 ->setFNacimiento($fNacimiento);
		$obj_usuario2 ->setTelefono($telefono);
        $obj_usuario2 ->setEmail($email);
        $obj_usuario2 ->setPassword($password);
        $obj_usuario2 ->setPrivilegio($privilegio);

		return usuarioDao::registrar($obj_usuario2);
	}


	public function login($email,$password)
	{
		$obj_usuario = new usuario();
		$obj_usuario->setEmail($email);
		$obj_usuario->setPassword($password);

		return usuarioDao::login($obj_usuario);
	}

}
