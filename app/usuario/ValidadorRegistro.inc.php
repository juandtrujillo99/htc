<?php



include_once 'RepositorioUsuario.inc.php';



class ValidadorRegistro{


	private $aviso_inicio;
	private $aviso_cierre;


	private $nombre;
	private $apellido;
	private $email;
	private $clave;

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




	private $error_nombre;
	private $error_apellido;
	private $error_email;	
	private $error_clave1;
	private $error_clave2;


	private $error_fecha_nacimiento;
	private $error_pais;
	private $error_telefono;
	private $error_dieta;

	private $error_objetivo;
	private $error_altura;
	private $error_peso;
	private $error_lugar_entreno;

	private $error_restricciones;
	private $error_plan;



	public function __construct($nombre,$apellido,$email,$clave1,/*$clave2,*/$fecha_nacimiento,$pais,$telefono,$dieta,$objetivo,$altura,$peso,$lugar_entreno,$restricciones,$plan,$conexion){



		$this -> aviso_inicio = "<span class='alert alert-danger'>";
		$this -> aviso_cierre = "</span>";

		$this -> nombre = "";
		$this -> apellido = "";
		$this -> email = "";
		$this -> clave = "";

		$this -> fecha_nacimiento = "";
		$this -> pais = "";
		$this -> telefono = "";
		$this -> dieta = "";

		$this -> objetivo = "";
		$this -> altura = "";
		$this -> peso = "";
		$this -> lugar_entreno = "";

		$this -> restricciones = "";
		$this -> plan = "";



		$this -> error_nombre = $this -> validar_nombre($conexion, $nombre);
		$this -> error_apellido = $this -> validar_apellido($conexion, $apellido);
		$this -> error_email = $this -> validar_email($conexion, $email);
		$this -> error_clave1 = $this -> validar_clave1($clave1);
		/*
		$this -> error_clave2 = $this -> validar_clave2($clave1, $clave2);
		
		
		//Esta seccion se encarga de verificar que clave 1 y clave 2 sean iguales para mayor seguridad
		if ($this -> error_clave1 === "" && $this -> error_clave2 === "") {
			$this -> clave = $clave1;
		}
		*/

		$this -> clave = $clave1;

		$this -> error_fecha_nacimiento = $this -> validar_fecha_nacimiento($conexion, $fecha_nacimiento);
		$this -> error_pais = $this -> validar_pais($conexion, $pais);
		$this -> error_telefono = $this -> validar_telefono($conexion, $telefono);
		$this -> error_dieta = $this -> validar_dieta($conexion, $dieta);

		$this -> error_objetivo = $this -> validar_objetivo($conexion, $objetivo);
		$this -> error_altura = $this -> validar_altura($conexion, $altura);
		$this -> error_peso = $this -> validar_peso($conexion, $peso);
		$this -> error_lugar_entreno = $this -> validar_lugar_entreno($conexion, $lugar_entreno);

		$this -> error_restricciones = $this -> validar_restricciones($conexion, $restricciones);
		$this -> error_plan = $this -> validar_plan($conexion, $plan);
	}


	private function variable_iniciada($variable){
		if (isset($variable) && !empty($variable)) {
			return true;
		}
		else{
			return false;
		}
	}


	private function validar_nombre($conexion, $nombre){
		if(!$this -> variable_iniciada($nombre)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> nombre = $nombre;
		}
		if (!empty($nombre) && strlen($nombre) < 1) {
			return "Escribe el nombre.";
		}

		if (strlen($nombre) > 40) {
			return "El nombre no puede ser tan largo.";
		}
		return "";
	}


	private function validar_apellido($conexion, $apellido){
		if(!$this -> variable_iniciada($apellido)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> apellido = $apellido;
		}
		if (!empty($apellido) && strlen($apellido) < 1) {
			return "Escribe el apellido.";
		}

		if (strlen($apellido) > 40) {
			return "El apellido no puede ser tan largo.";
		}
		return "";
	}


	private function validar_email($conexion, $email){
		if(!$this -> variable_iniciada($email)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> email = $email;
		}
		if (RepositorioUsuario :: email_existe($conexion, $email)) {
			return "El email ya está en uso, prueba con otro.";
		}
		return "";
	}


	private function validar_clave1($clave1){
		if(!$this -> variable_iniciada($clave1)){
			return "Este campo no puede estar vacio.";
		}
		return "";
	}


/*
	private function validar_clave2($clave1, $clave2){
		if (!$this -> variable_iniciada($clave1)) {
			return "Primero debes rellenar la contraseña.";
		}

		if(!$this -> variable_iniciada($clave2)){
			return "Las contraseñas no coinciden.";
		}

		if($clave1 !== $clave2){
			return "Las contraseñas deben coincidir.";
		}
		return "";
	}
*/
	


	private function validar_fecha_nacimiento($conexion, $fecha_nacimiento){
		if(!$this -> variable_iniciada($fecha_nacimiento)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> fecha_nacimiento = $fecha_nacimiento;
		}
		return "";
	}


	private function validar_pais($conexion, $pais){
		if(!$this -> variable_iniciada($pais)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> pais = $pais;
		}
		return "";
	}

	private function validar_telefono($conexion, $telefono){
		if(!$this -> variable_iniciada($telefono)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> telefono = $telefono;
		}
		if (!empty($telefono) && strlen($telefono) < 1) {
			return "Este campo no puede estar vacio.";
		}
		return "";
	}


	private function validar_dieta($conexion, $dieta){
		if(!$this -> variable_iniciada($dieta)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> dieta = $dieta;
		}
		if (!empty($dieta) && strlen($dieta) < 1) {
			return "Este campo no puede estar vacio.";
		}
		return "";
	}


	private function validar_objetivo($conexion, $objetivo){
		if(!$this -> variable_iniciada($objetivo)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> objetivo = $objetivo;
		}
		if (!empty($objetivo) && strlen($objetivo) < 1) {
			return "Este campo no puede estar vacio.";
		}
		return "";
	}


	private function validar_altura($conexion, $altura){
		if(!$this -> variable_iniciada($altura)){
			return "";
		}
		else {
			$this -> altura = $altura;
		}
		if (!empty($altura) && strlen($altura) < 1) {
			return "Este campo no puede estar vacio.";
		}
		return "";
	}

	private function validar_peso($conexion, $peso){
		if(!$this -> variable_iniciada($peso)){
			return "";
		}
		else {
			$this -> peso = $peso;
		}
		return "";
	}


	private function validar_lugar_entreno($conexion, $lugar_entreno){
		if(!$this -> variable_iniciada($lugar_entreno)||!isset($lugar_entreno)){
			return "Este campo no puede estar vacio.";
		}
		else {
			$this -> lugar_entreno = $lugar_entreno;
		}
		return "";
	}


	private function validar_restricciones($conexion, $restricciones){
		if(!$this -> variable_iniciada($restricciones)){
			return "";
		}
		else {
			$this -> restricciones = $restricciones;
		}
		if (!empty($restricciones) && strlen($restricciones) < 1) {
			return "Este campo no puede estar vacio.";
		}
		return "";
	}


	private function validar_plan($conexion, $plan){
		if(!$this -> variable_iniciada($plan)){
			return "";
		}
		else {
			$this -> plan = $plan;
		}
		if (!empty($plan) && strlen($plan) < 1) {
			return "Este campo no puede estar vacio.";
		}
		return "";
	}






	public function obtener_nombre(){return $this -> nombre;}
	public function obtener_apellido(){return $this -> apellido;}
	public function obtener_email(){return $this -> email;}
	public function obtener_clave(){return $this -> clave;}

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





	public function obtener_error_nombre(){return $this -> error_nombre;}
	public function obtener_error_apellido(){return $this -> error_apellido;}
	public function obtener_error_email(){return $this -> error_email;}
	public function obtener_error_clave1(){return $this -> error_clave1;}
	/*
	public function obtener_error_clave2(){

		return $this -> error_clave2;

	}*/


	public function obtener_error_fecha_nacimiento(){return $this -> error_fecha_nacimiento;}
	public function obtener_error_pais(){return $this -> error_pais;}
	public function obtener_error_telefono(){return $this -> error_telefono;}
	public function obtener_error_dieta(){return $this -> error_dieta;}


	public function obtener_error_objetivo(){return $this -> error_objetivo;}
	public function obtener_error_altura(){return $this -> error_altura;}
	public function obtener_error_peso(){return $this -> error_peso;}
	public function obtener_error_lugar_entreno(){return $this -> error_lugar_entreno;}


	public function obtener_error_restricciones(){return $this -> error_restricciones;}
	public function obtener_error_plan(){return $this -> error_plan;}




	

	public function mostrar_nombre(){
		if ($this -> nombre !== "") {
			echo 'value="'. $this -> nombre . '"';
		}
	}
	public function mostrar_error_nombre(){
		if ($this -> error_nombre !== "") {
			echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre;
		}
	}

	public function mostrar_apellido(){
		if ($this -> apellido !== "") {
			echo 'value="'. $this -> apellido . '"';
		}
	}
	public function mostrar_error_apellido(){
		if ($this -> error_apellido !== "") {
			echo $this -> aviso_inicio . $this -> error_apellido . $this -> aviso_cierre;
		}
	}

	public function mostrar_email(){
		if ($this -> email !== "") {
			echo 'value="'. $this -> email . '"';
		}
	}
	public function mostrar_error_email(){
		if ($this -> error_email !== "") {
			echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre;
		}
	}

	public function mostrar_error_clave1(){
		if ($this -> error_clave1 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave1 . $this -> aviso_cierre;
		}
	}
	/*
	public function mostrar_error_clave2(){
		if ($this -> error_clave2 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave2 . $this -> aviso_cierre;
		}
	}*/
	
	public function mostrar_fecha_nacimiento(){
		if ($this -> fecha_nacimiento !== "") {
			echo 'value="'. $this -> fecha_nacimiento . '"';
		}
	}
	public function mostrar_error_fecha_nacimiento(){
		if ($this -> error_fecha_nacimiento !== "") {
			echo $this -> aviso_inicio . $this -> error_fecha_nacimiento . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_pais(){
		if ($this -> pais !== "") {
			echo 'value="'. $this -> pais . '"';
		}
	}
	public function mostrar_pais_seleccionado(){
		if ($this -> pais !== "") {
			echo $this -> pais;
		}
	}
	public function mostrar_error_pais(){
		if ($this -> error_pais !== "") {
			echo $this -> aviso_inicio . $this -> error_pais . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_telefono(){
		if ($this -> telefono !== "") {
			echo 'value="'. $this -> telefono . '"';
		}
	}
	public function mostrar_error_telefono(){
		if ($this -> error_telefono !== "") {
			echo $this -> aviso_inicio . $this -> error_telefono . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_dieta(){
		if ($this -> dieta !== "") {
			echo 'value="'. $this -> dieta . '"';
		}
	}
	public function mostrar_dieta_seleccionada(){
		if ($this -> dieta !== "") {
			echo $this -> dieta;
		}
	}
	public function mostrar_error_dieta(){
		if ($this -> error_dieta !== "") {
			echo $this -> aviso_inicio . $this -> error_dieta . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_objetivo(){
		if ($this -> objetivo !== "") {
			echo 'value="'. $this -> objetivo . '"';
		}
	}
	public function mostrar_objetivo_seleccionado(){
		if ($this -> objetivo !== "") {
			echo $this -> objetivo;
		}
	}
	public function mostrar_error_objetivo(){
		if ($this -> error_objetivo !== "") {
			echo $this -> aviso_inicio . $this -> error_objetivo . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_altura(){
		if ($this -> altura !== "") {
			echo 'value="'. $this -> altura . '"';
		}
	}
	public function mostrar_error_altura(){
		if ($this -> error_altura !== "") {
			echo $this -> aviso_inicio . $this -> error_altura . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_peso(){
		if ($this -> peso !== "") {
			echo 'value="'. $this -> peso . '"';
		}
	}
	public function mostrar_error_peso(){
		if ($this -> error_peso !== "") {
			echo $this -> aviso_inicio . $this -> error_peso . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_lugar_entreno(){
		if ($this -> lugar_entreno !== "") {
			echo 'value="'. $this -> lugar_entreno . '"';
		}
	}	
	public function mostrar_lugar_entreno_seleccionado(){
		if ($this -> lugar_entreno !== "") {
			echo $this -> lugar_entreno;
		}
	}
	public function mostrar_error_lugar_entreno(){
		if ($this -> error_lugar_entreno !== "") {
			echo $this -> aviso_inicio . $this -> error_lugar_entreno . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_restricciones(){
		if ($this -> restricciones !== "") {
			echo 'value="'. $this -> restricciones . '"';
		}
	}
	public function mostrar_error_restricciones(){
		if ($this -> error_restricciones !== "") {
			echo $this -> aviso_inicio . $this -> error_restricciones . $this -> aviso_cierre;
		}
	}
	
	public function mostrar_plan(){
		if ($this -> plan !== "") {
			echo 'value="'. $this -> plan . '"';
		}
	}
	public function mostrar_plan_seleccionado(){
		if ($this -> plan !== "") {
			echo $this -> plan;
		}
	}
	public function mostrar_error_plan(){
		if ($this -> error_plan !== "") {
			echo $this -> aviso_inicio . $this -> error_plan . $this -> aviso_cierre;
		}
	}




	

	public function registro_valido(){

		if ($this -> error_nombre === "" &&
			$this -> error_apellido === "" &&
			$this -> error_email === "" &&
			$this -> error_clave1 === "" &&/*
			$this -> error_clave2 === "" &&*/
			$this -> error_fecha_nacimiento === "" &&
			$this -> error_pais === "" &&
			$this -> error_telefono === "" &&
			$this -> error_dieta === "" &&
			$this -> error_objetivo === "" &&
			$this -> error_altura === "" &&
			$this -> error_peso === "" &&
			$this -> error_lugar_entreno === "" &&
			$this -> error_restricciones === "" &&
			$this -> error_plan === "") {
			return true;
	}
		else{
			return false;
		}
	}
}