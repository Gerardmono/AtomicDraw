<?php
    class Notice{
        private $id;
        private $clasificacion;
        private $titulo;
        private $descripcion;
        private $fecha;

        function __construct($id,$clasificacion,$titulo,$descripcion,$fecha){
             $this->id=$id;
             $this->clasificacion=$clasificacion;
             $this->titulo=$titulo;
             $this->descripcion=$descripcion;
             $this->$fecha=$fecha;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
            return $this;
        }

        public function getClasificacion(){
            return $this->clasificacion;
        }

        public function setClasificacion($clasificacion){
            $this->clasificacion = $clasificacion;
            return $this;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo){
            $this->titulo = $titulo;
            return $this;
        }

        public function getDescripcion() {
            return $this->descripcion;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
            return $this;
        }
 
        public function getFecha() {
            return $this->fecha;
        }

        public function setFecha($fecha){
            $this->fecha = $fecha;
            return $this;
        }
    }
?>