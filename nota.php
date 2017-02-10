<?php

class Nota
{
    private $id;
    private $nombre;
    private $parcial;
    private $final;
    private $mejoramiento;
    private $aprueba;

     function __construct($id, $nombre, $parcial, $final, $mejoramiento, $aprueba) {
       $this->id = $id;
       $this->nombre = $nombre;
        $this->parcial = $parcial;
        $this->final = $final;
       $this->mejoramiento = $mejoramiento;
        $this->aprueba = $aprueba;
     }
    
     function setId($id){
       $this->id = $id;
     } 
     function getId(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
      function setParcial($parcial){
       $this->parcial = $parcial;
     } 
     function getParcial(){
       return $this->parcial;
     } 
     
      function setFinal($final){
       $this->final = $final;
     } 
     function getFinal(){
       return $this->final;
     }  
     
      function setMejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getMejoramiento(){
       return $this->mejoramiento;
     } 

     function setAprueba($aprueba){
       $this->aprueba = $aprueba;
     } 
     function getAprueba(){
       return $this->aprueba;
     } 

}


?> 


