<?php
    class Publicacion{
        private $titulo;
        private $precio;
        private $id_ui;
        private $descripcion;
        private $filename;

        function __construct($titulo, $precio, $id_ui, $descripcion, $filename){
            $this->titulo=$titulo;
            $this->precio=$precio;
            $this->id_ui=$id_ui;
            $this->descripcion=$descripcion;
            $this->filename=$filename; // Imagen de la publicacion
        }

        public function setTitulo($titulo) { $this->titulo = $titulo; }
        public function getTitulo() { return $this->titulo; }
        public function setPrecio($precio) { $this->precio = $precio; }
        public function getPrecio() { return $this->precio; }
        public function setId_ui($id_ui) { $this->id_ui = $id_ui; }
        public function getId_ui() { return $this->id_ui; }
        public function setDescripcion($descripcion) { $this->descripcion = $descripcion; }
        public function getDescripcion() { return $this->descripcion; }
        public function setFilename($filename) { $this->filename = $filename; }
        public function getFilename() { return $this->filename; }
              
    }
?>