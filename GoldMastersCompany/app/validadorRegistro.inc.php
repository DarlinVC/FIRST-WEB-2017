<?php

include_once 'RepositorioUsuario.inc.php';

class validadorRegistro{
    private $aviso_inicio;
    private $aviso_cierre;

	private $nombre;
	private $email;
	private $password;

	private $error_nombre;
	private $error_email;
	private $error_pass;
	private $error_pass2;

	public function __construct($nombre, $email, $pass, $pass2, $conexion){
        $this -> aviso_inicio = "<div class='alert alert-danger' role='alert'>";
        $this -> aviso_cierre = "</div>";

        $this -> nombre = "";
        $this -> email  = "";
        $this -> pass   = "";


        $this -> error_nombre = $this -> validar_nombre($conexion, $nombre);
        $this -> error_email  = $this -> validar_email($conexion, $email);
        $this -> error_pass   = $this -> validar_pass($pass);
        $this -> error_pass2  = $this -> validar_pass2($pass, $pass2);
    if ($this -> error_pass === "" && $this -> error_pass2 === ""){
    	$this -> password = $pass;
    }

	}

	private function variable_iniciada($variable){
		if (isset($variable) && !empty($variable)){
			return true;
		} else{
			return false;
		}
	}

	private function validar_nombre($conexion, $nombre){
		if (!$this -> variable_iniciada($nombre)) {
			return "Escribe un nombre.";
		} else {
			$this -> nombre = $nombre;
		}

		if (strlen($nombre) < 6){
			return "El nombre debe ser mas largo.";
		}

		if (strlen($nombre) > 30){
			return "El nombre no puede ocupar mas de 30 caracteres.";
		} 

		if (RepositorioUsuario :: nombre_existe($conexion, $nombre)) {
			return "Este nombre ya existe, intente con otro.";
		}
         return "";
		
		}

	private function validar_email($conexion, $email){
		if (!$this -> variable_iniciada($email)){
                    return "Debes proporcionar un email.";
		} else{
			$this -> email = $email;
		}

		if (RepositorioUsuario :: email_existe($conexion, $email)) {
			return "Este email ya existe, intente con otro o <a href='#'>Intente recuperar su contraseña.</a>";
		}

		return "";
	}
		

	private function validar_pass($pass){
       if (!$this -> variable_iniciada($pass)) {
       	  return "primero debes llenar el campo contraseña.";
       }
       if (strlen($pass) < 10){
           return "El campo contraseña debe tener mas de diez digitos";
		}

		if (strlen($pass) > 30) {
				return "El campo contraseña no debe tener mas de 30 digitos";
			} 
			return "";
       
		}

	    private function validar_pass2($pass, $pass2){
		if (!$this -> variable_iniciada($pass)){
                return "debes llenar las contraseñas.";
		    } 
        if (!$this -> variable_iniciada($pass2)){
                return "Debes confirmar la contraseña.";
            }
		if ($pass !== $pass2){
				return "Las contraseñas deben de ser iguales.";
			}
			
			return "";
		
      }
		public function obtener_nombre(){
			return $this -> nombre;
		}

		public function obtener_email(){
			return $this -> email;
		}

		public function obtener_pass(){
			return $this -> password;
		}

		public function obtener_error_nombre(){
			return $this -> error_nombre;
		}

		public function obtener_error_email(){
			return $this -> error_email;
		}

		public function obtener_error_pass(){
			return $this -> error_pass;
		}

		public function obtener_error_pass2(){
			return $this -> error_pass2;
		}

        public function mostrar_nombre(){
        	if ($this ->nombre !== ""){
        		echo 'value="' . $this -> nombre . '"'; 
        	}
        }

        public function mostrar_email(){
        	if ($this ->email !== ""){
        		echo 'value="' . $this -> email . '"'; 
        	}
        }

        public function mostrar_error_nombre(){
        	if ($this -> error_nombre !== ""){
               echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre;
        	}

        }

         public function mostrar_error_email(){
        	if ($this -> error_email !== ""){
               echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre;
        	}

        }

        public function mostrar_error_pass(){
        	if ($this -> error_pass !== ""){
               echo $this -> aviso_inicio . $this -> error_pass . $this -> aviso_cierre;
        	}

        }

        public function mostrar_error_pass2(){
        	if ($this -> error_pass2 !== ""){
               echo $this -> aviso_inicio . $this -> error_pass2 . $this -> aviso_cierre;
        	}

        }

        public function registro_valido(){
        	if ($this -> error_nombre === "" && $this -> error_email  === "" && $this -> error_pass   === "" && 
        		$this -> error_pass2  === ""){

        		return true;
        	} else{
        		return false;
        	}
        }
    }