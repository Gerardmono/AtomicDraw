<?php
    require_once 'Noticia.php';
    require_once 'services/conectores_DB/C_DB_Servidor/Proxy_Noticias.php';
    
    class GestorInformacion{
        private $proxy_noticias;

        function __construct(){
            $this->proxy_noticias= Database::connect();
        }

        public function saveNotice($id,$clasificacion,$titulo,$descripcion,$fecha){
            $noticia= new Notice($id,$clasificacion,$titulo,$descripcion,$fecha);          
            $sql = "INSERT INTO noticias VALUES (NULL, '{$noticia->getClasificacion()}', '{$noticia->getTitulo()}','{$noticia->getDescripcion()}', '{$noticia->getFecha()}'); ";
            var_dump($sql);
            die();

            $save = $this->proxy_noticias->query($sql);
			$result = false;
			if ($save) {
				$result = true;
			}
			return $result; 
        }
    }
?>