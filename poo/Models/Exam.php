<?php

require 'Model.php';

//Clase Examen
class Exam extends Model{
    public function __construct(
        public $topic, 
        public $info,
        public $completed = false)
    {
        //
    }

}