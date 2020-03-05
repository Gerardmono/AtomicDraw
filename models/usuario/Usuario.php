<?php
    class Usuario{
        private $id;
        private $nombre;
        private $apellidoP;
        private $apellidoM;
        private $email;
        private $password;
        private $imagen;

        // function __construct($id,$nombre,$apellidoP,$apellidoM,$email,$password,$imagen){
        //     $this->id=$id;
        //     $this->nombre=$nombre;
        //     $this->apellidoP=$apellidoP;
        //     $this->apellidoM=$apellidoM;
        //     $this->email=$email;
        //     $this->password=$password;
        //     $this->imagen=$imagen;
        // }

        function __construct(){

        }

        function inicializarRegistro($nombre, $apellidoP, $apellidoM, $email, $password, $imagen){        
            $this->nombre=$nombre;
            $this->apellidoP=$apellidoP;
            $this->apellidoM=$apellidoM;
            $this->email=$email;
            $this->password=$password;
            $this->imagen=$imagen;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
            return $this;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
            return $this;
        }

        public function getApellidoP(){
            return $this->apellidoP;
        }

        public function setApellidoP($apellidoP){
            $this->apellidoP = $apellidoP;
            return $this;
        }
 
        public function getApellidoM(){
            return $this->apellidoM;
        }

        public function setApellidoM($apellidoM){
            $this->apellidoM = $apellidoM;
            return $this;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
            return $this;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
            return $this;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
            return $this;
        }       
    }
?>