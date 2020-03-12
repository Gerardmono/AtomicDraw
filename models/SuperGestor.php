<?php
    
    class SuperGestor{

        function __construct(){
            
        }

        public function DelegarSaveNotice($id,$clasificacion,$titulo,$descripcion,$fecha){
            require_once 'usuario/GestorInformacion.php';
            $gestor= new GestorInformacion();
            $result= $gestor->saveNotice($id,$clasificacion,$titulo,$descripcion,$fecha);
            return $result;
        }

        public function delegarGuardarRegistro($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename){
            require_once 'usuario/GestorAutenticacion.php';
            $gestorAutenticacion= new GestorAutenticacion();
            $result= $gestorAutenticacion->guardarRegistro($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename);
            return $result;
        }

        public function delegarAutenticacionLogin($email){
            require_once 'usuario/GestorAutenticacion.php';
            $gestorAutenticacionLogin = new GestorAutenticacion();
            $numeroUsers= $gestorAutenticacionLogin->comprobarCredencial($email);
            return $numeroUsers;
        }

        public function delegarUpdateNotice(){
            require_once 'usuario/GestorInformacion.php';
            $gestor= new GestorInformacion();
            $news= $gestor->updateNews();
            return $news;
        }

        public function delegaGuardarPublicacion($titulo, $precio, $id_ui, $descripcion, $filename){
            require_once 'biblioteca/GestorContenido.php';
            require_once 'biblioteca/Publicacion.php';

            $publicacionNueva= new Publicacion($titulo, $precio, $id_ui, $descripcion, $filename);

            $gestorContenido= new GestorContenido();
            $result= $gestorContenido->guardarPublicacion($publicacionNueva);
            return $result;
        }

    }

?>