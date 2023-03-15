<?php

class Usuario {

	private $id;
	private $nombre;
	private $email;
	private $password;
	private $fecha_de_registro;
	private $activo;

	public function __construct($id, $nombre, $email, $password, $fecha_de_registro, $activo){
		$this -> id = $id;
		$this -> nombre = $nombre;
		$this -> email = $email;
		$this -> password = $password;
		$this -> fecha_de_registro = $fecha_de_registro;
		$this -> activo = $activo;
	}

    public function obtener_id(){
    	return $this -> id;
    }

     public function obtener_nombre(){
    	return $this -> nombre;
    }

     public function obtener_email(){
    	return $this -> email;
    }
     public function obtener_password(){
    	return $this -> password;
    }

     public function getFechadeRegistro(){
    	return $this -> fecha_de_registro;
    }

     public function Esta_Activo(){
    	return $this -> activo;
    }

    public function cambiar_nombre($nombre){
    	$this -> nombre = $nombre;
    }

     public function cambiar_email($email){
    	$this -> email = $email;
    }

     public function cambiar_password($password){
    	$this -> password = $password;
    }

     public function cambiar_activo($activo){
    	$this -> activo = $activo;
    }

}