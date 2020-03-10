<?php
    require_once 'usuario/GestorInformacion.php';
    class SuperGestor{
        public function DelegarSaveNotice($id,$clasificacion,$titulo,$descripcion,$fecha){
            $gestor= new GestorInformacion();
            $result= $gestor->saveNotice($id,$clasificacion,$titulo,$descripcion,$fecha);
            return $result;
        }
    }
?>