<?php
    class Student {
        public $id;
        public $nombre;
        public $apellido;
        public $estatus;
        public $carrera;
        public $materias;
        public $fotoPerfil;

        public function __construct() { }

        public function Initialize($id, $nombre, $apellido, $estatus, $carrera, $materias, $fotoPerfil) {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->estatus = $estatus;
            $this->carrera = $carrera;
            $this->materias = $materias;
            $this->fotoPerfil = $fotoPerfil;
        }
    }
?>