<?php 
    require_once 'services/conectores_DB/C_DB_Servidor/Proxy_Contenido.php';

	class GestorContenido{
		// Proxy Contenido
		private $proxy_contenido;

		function __construct(){
			$this->proxy_contenido= Database::connect();
        }
        
        public function guardarPublicacion($publicacion){

            $sql = "INSERT INTO publicaciones VALUES (NULL, '{$publicacion->getTitulo()}', '{$publicacion->getPrecio()}'";
			$sql.= ", '{$publicacion->getDescripcion()}', '{$publicacion->getId_ui()}', '{$publicacion->getFilename()}'); ";
				
			// var_dump($sql);
			// die();
            $save = $this->proxy_contenido->query($sql);
            
            $result = false;
			if ($save) {
				$result = true;
			}
			return $result; 

        }

	
	}