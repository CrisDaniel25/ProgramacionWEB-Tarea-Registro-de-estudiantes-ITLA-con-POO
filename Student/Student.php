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

        public function set($data) {
            foreach ($data as $key => $value) $this->{$key} = $value;
        }

        public function GetCookieTime() {
            return time() + 60 * 60 * 24 * 30;
        }

        public function searchProperty($list, $value) {
            
            foreach ($list as $item) {
                if ($item->id == $value) {
                    $filter = $value;
                }
            }

            return 1;
        }

        public function getIndexElement($list, $property, $value) {

            $index = 0;

            foreach ($list as $key => $item) {
                if ($item->id == $value) {
                    $index = $key;
                }
            }

            return $index;
        }
    }
?>