<?php
require_once 'models/usuario/GestorInformacion.php';

class Utils{
	//Metodo estaticos que no necesitan instanciar el objeto o crear objeto, solo llamar los metodos

	public static function deleteSession($name){
		if (isset($_SESSION[$name])) {
			$_SESSION[$name]  = null;
			unset($_SESSION[$name]);
		}
		return $name; 
	}

	public static function isAdmin() {
		//Redirige si no es Admin
		if (!isset($_SESSION['admin'])) {
			header("Location:".base_url);
		}else{
			return true;
		}
	}

	public static function isIdentity() {
		if (!isset($_SESSION['identity'])) {
			header("Location:".base_url);
		}else{
			return true;
		}
	}

	public static function borrarSesionesRegistro(){
		Utils::deleteSession('nombre');
		Utils::deleteSession('apellidoP');
		Utils::deleteSession('apellidoM');
		Utils::deleteSession('email');
		Utils::deleteSession('password');
		Utils::deleteSession('passwordConfirm');
	}

	public static function borrarSesionNotice(){
		Utils::deleteSession('clasificacion');
		Utils::deleteSession('titulo');
		Utils::deleteSession('descripcion');
		Utils::deleteSession('fecha');
	}

	public static function borrarSesionesLogin(){
		Utils::deleteSession('usuarioLogin');
		Utils::deleteSession('passwordLogin');
	}

	public static function validaNombre($nombre){
		if( !empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){
			$nombre_validado = true;
		}else{
			$nombre_validado = false;
			$_SESSION['register'] = "failed";
		}
		return $nombre_validado;
	}

	public static function validarEmail($email){
		if( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email_validado = true;
		}else{
			$email_validado = false;
			$_SESSION['register'] = "failed";
		}
		return $email_validado;
	}

	public static function getNewsAtomic(){
		$gestor= new GestorInformacion();
		$news= $gestor->getSomeNewsAtomic();
		return $news;
	}

	public static function getNewsEntorno(){
		$gestor= new GestorInformacion();
		$news= $gestor->getSomeNewsEntorno();
		return $news;
	}

}

?>