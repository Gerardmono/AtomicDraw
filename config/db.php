<?php
class Database{
	public static function connect(){
		$db = new mysqli('localhost','root','','speedybus');
		//$db=new mysqli('db4free.net','speedybus','speedybus19p','speedybus');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}
?>