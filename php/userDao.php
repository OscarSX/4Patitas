<?php
include 'connection.php';
include 'classUser.php';

class usuarioDao extends Conexion
{
	protected static $con ;

	public static function getConexion(){
		self::$con = conexion::conectar();
	}

	private static function desconectar(){
		self::$con = null;
	}


	public static function get($usuario)
    {
        $query ="select * from usuario where email = :email and password = :password";
        self::getConexion();

        $resultado = self::$con->prepare($query);

        $email = $usuario->getEmail();
        $pass = $usuario->getPassword();



        $resultado -> bindParam(":email",$email);
        $resultado -> bindParam(":password",$pass);

        $resultado -> execute();

        $filas = $resultado->fetch();

        $usuario = new usuario();
        $usuario ->setIdUsuario($filas["idUsuario"]);
        $usuario ->setNombre($filas["nombre"]);
        $usuario ->setApellidos($filas["apellidos"]);
        $usuario ->setGenero($filas["genero"]);
        $usuario ->setFNacimiento($filas["fNacimiento"]);
        $usuario ->setTelefono($filas["telefono"]);
        $usuario ->setEmail($filas["email"]);
        $usuario ->setPassword($filas["password"]);
        $usuario ->setPrivilegio($filas["privilegio"]);

        return $usuario;

    }


    public static function registrar($usuario)
    {
        $query ="insert into usuario(nombre,apellidos,genero,fNacimiento,telefono,email,password,privilegio)
        values(:nombre,:apellidos,:genero,:fNacimiento,:telefono,:email,:password,:privilegio)";



        self::getConexion();

        $resultado = self::$con->prepare($query);



        $nom = $usuario->getNombre();
        $ap = $usuario->getApellidos();
        $gen = $usuario->getGenero();
        $fNac = $usuario->getFNAcimiento();
        $tel = $usuario->getTelefono();
        $email = $usuario->getEmail();
        $pass = $usuario->getPassword();
        $priv = $usuario->getPrivilegio();


        $resultado -> bindParam(":nombre",$nom);
        $resultado -> bindParam(":apellidos",$ap); 
        $resultado -> bindParam(":genero",$gen); 
        $resultado -> bindParam(":fNacimiento",$fNac);
        $resultado -> bindParam(":telefono",$tel);
        $resultado -> bindParam(":email",$email);
        $resultado -> bindParam(":password",$pass);
        $resultado -> bindParam(":privilegio",$priv);


        $resultado -> execute();


        if($resultado->rowCount() > 0){
            return true;
        }
        return false;
    }




    public static function login ($usuario)
    {
        $query ="select * from usuario where email = :email and password = :password";
        self::getConexion();

        $resultado = self::$con->prepare($query);

        $email = $usuario->getEmail();
        $pass = $usuario->getPassword();



        $resultado -> bindParam(":email",$email);
        $resultado -> bindParam(":password",$pass);

        $resultado -> execute();

        if($resultado->rowCount() > 0)
        {
            //return true;
            $filas = $resultado->fetch();
            if($filas["email"] == $email && $filas["password"] == $pass){
                return true;
            }
        }

        return false;

    }
}
