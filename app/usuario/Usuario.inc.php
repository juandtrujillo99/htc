<?php



/**

 * 

 */

class Usuario{


	private $id;
	private $nombre;
	private $apellido;
	private $email;
	private $password;

	private $fecha_nacimiento;
	private $pais;
	private $telefono;
	private $dieta;

	private $objetivo;
	private $altura;
	private $peso;
	private $lugar_entreno;

	private $restricciones;
	private $plan;
	private $fecha_registro;
	private $activo;



	public function __construct($id, $nombre, $apellido, $email, $password, $fecha_nacimiento, $pais, $telefono, $dieta, $objetivo, $altura, $peso, $lugar_entreno, $restricciones, $plan, $fecha_registro, $activo){

		$this -> id = $id;
		$this -> nombre = $nombre;
		$this -> apellido = $apellido;
		$this -> email = $email;
		$this -> password = $password;


		$this -> fecha_nacimiento = $fecha_nacimiento;
		$this -> pais = $pais;
		$this -> telefono = $telefono;
		$this -> dieta = $dieta;


		$this -> objetivo = $objetivo;
		$this -> altura = $altura;
		$this -> peso = $peso;
		$this -> lugar_entreno = $lugar_entreno;


		$this -> restricciones = $restricciones;
		$this -> plan = $plan;
		$this -> fecha_registro = $fecha_registro;
		$this -> activo = $activo;

	}



	public function obtener_id(){return $this -> id;}
	public function obtener_nombre(){return $this -> nombre;}
	public function obtener_apellido(){return $this -> apellido;}
	public function obtener_email(){return $this -> email;}
	public function obtener_password(){return $this -> password;}

	public function obtener_fecha_nacimiento(){return $this -> fecha_nacimiento;}
	public function obtener_pais(){return $this -> pais;}
	public function obtener_telefono(){return $this -> telefono;}
	public function obtener_dieta(){return $this -> dieta;}

	public function obtener_objetivo(){return $this -> objetivo;}
	public function obtener_altura(){return $this -> altura;}
	public function obtener_peso(){return $this -> peso;}
	public function obtener_lugar_entreno(){return $this -> lugar_entreno;}

	public function obtener_restricciones(){return $this -> restricciones;}
	public function obtener_plan(){return $this -> plan;}
	public function obtener_fecha_registro(){return $this -> fecha_registro;}
	public function esta_activo(){return $this -> activo;}







/*Dudo que esto sirva para algo*/
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