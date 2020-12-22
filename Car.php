<?php
    class Car{
        //properties
        public $make;
        public $model;
        public $color;

        public function __construct(){
            $this->make = "";
            $this->model = "";
            $this->color = "";
        }

        public function __destruct(){
            // echo "Deleting objects....";
        }

        // setter
        public function set_values($mak, $mod, $col){
            $this->make = $mak;
            $this->model = $mod;
            $this->color = $col;
        }

        //getters
        public function get_make(){
            return $this->make;
        }

        public function get_model(){
            return $this->model;
        }

       public function get_color(){
           return $this->color;
       }
    }
?>










