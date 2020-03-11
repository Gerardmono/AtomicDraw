<?php
class Database{
	public static function connect(){
		$proxy_usuarios = new mysqli('localhost','root','','atomic_draw');
		$proxy_usuarios->query("SET NAMES 'utf8'");
		return $proxy_usuarios;
    }
}
?>