<?php
    require_once 'Noticia.php';
    //require_once 'services/conectores_DB/C_DB_Servidor/Proxy_Noticias.php';
    include_once 'services/conectores_DB/C_DB_Servidor/Proxy_Noticias.php';
    
    class GestorInformacion{
        private $proxy_noticias;

        function __construct(){
            $this->proxy_noticias= Database::connect();
        }

        public function getSomeNewsAtomic(){
            $noticia= new Notice(null,null,null,null,null);
            $sql= "SELECT * FROM noticias WHERE clasificacion='Atomic Draw' ORDER BY id DESC LIMIT 4;";
            $noticias = $this->proxy_noticias->query($sql);            
			return $noticias;
        }

        public function getSomeNewsEntorno(){
            $noticia= new Notice(null,null,null,null,null);
            $sql= "SELECT * FROM noticias WHERE clasificacion='Entorno' ORDER BY id DESC LIMIT 4;";
            $noticias = $this->proxy_noticias->query($sql);            
			return $noticias;
        }

        public function saveNotice($id,$clasificacion,$titulo,$descripcion,$fecha){
            
            $noticia= new Notice($id,$clasificacion,$titulo,$descripcion,$fecha);       
            $sql = "INSERT INTO noticias VALUES (NULL, '{$noticia->getClasificacion()}', '{$noticia->getTitulo()}','{$noticia->getDescripcion()}', '{$noticia->getFecha()}'); ";
            $save = $this->proxy_noticias->query($sql);
			$result = false;
			if ($save) {
				$result = true;
			}
			return $result; 
        }

        public function updateNews(){
            $noticia= new Notice(null,null,null,null,null);
            $sql= "SELECT * FROM noticias ORDER BY id DESC;";
            $noticia = $this->proxy_noticias->query($sql);         
			return $noticia;
        }
    }
?>