<?php

class RepositorioUsuario {

	public static function obtener_todos($conexion) {

		$usuarios = array();

		if (isset($conexion)) {

			try {

				include_once "Usuario.inc.php";

				$sql = "SELECT * FROM usuarios";

				$sentencia = $conexion -> prepare($sql);
				$resultado = $sentencia -> fetchAll();

				if (count($resultado)) {
					foreach ($resultado as $fila) {
						$usuarios[] = new Usuario(
							$fila['id'],$fila['nombre'],$fila['email'],$fila['password'],$fila['fecha_de_registro'],$fila['activo']

						);
					}

					}
			} catch (PDOException $ex) {
				print "ERROR". $ex -> getMessage();
			}

			return $usuarios;

		}

	}

	public static function insertar_usuarios($conexion, $usuario){
		$usuario_insertado = false;

		if (isset($conexion)){
		try {
			   $sql = "INSERT INTO usuarios(nombre, email, password, fecha_de_registro, activo) VALUES(:nombre, :email, :password, NOW(), 0)";
            $sentencia = $conexion -> prepare($sql);
            
            $nombre = $usuario -> obtener_nombre();
            $email = $usuario -> obtener_email();
            $password = $usuario -> obtener_password();

            $sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
            $sentencia -> bindParam(':password', $password, PDO::PARAM_STR);

            $sentencia_insertado = $sentencia -> execute();

			} catch (PDOexception $ex) {
               print 'ERROR' . $ex->getMessage();
			}
		}
		return $usuario_insertado;
	}

	public static function nombre_existe($conexion, $nombre){
        $nombre_existe = true;
		if (isset($conexion)){
			try {
				$sql = "SELECT * FROM usuarios WHERE nombre = :nombre";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				
				if(count($resultado)){
					$nombre_existe = true;
				} else{
					$nombre_existe = false;
				}
			} catch (PDOException $e) {
				print 'ERROR' .$e -> getMessage();
				
			}
		}

		return $nombre_existe;
	}


	public static function email_existe($conexion, $email){
        $email_existe = true;
		if (isset($conexion)){
			try {
				$sql = "SELECT * FROM usuarios WHERE email = :email";
				$sentencia = $conexion -> prepare($sql);
				$sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia -> execute();
				$resultado = $sentencia -> fetchAll();
				
				if(count($resultado)){
					$email_existe = true;
				} else{
					$email_existe = false;
				}
			} catch (PDOException $e) {
				print 'ERROR' .$e -> getMessage();
				
			}
		}

		return $email_existe;
	}


}