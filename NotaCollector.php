<?php

include_once('nota.php');
include_once('Collector.php');


class NotaCollector extends Collector
{
 
  function showNotas() {
    $rows = self::$db->getRows("SELECT * FROM nota");        
    $arrayNota= array();        
    foreach ($rows as $c){
      $aux = new Nota($c{$this->campo1},$c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'}, $c{'aprueba'} );
      array_push($arrayNota, $aux);
    }
    return $arrayNota;        
  }

  function deleteNotas($id) {
    $rows = self::$db->deleteRow("delete * FROM nota where id=$id",null);             
  }

  function insertNotas($nombre, $parcial, $final, $mejoramiento, $aprueba) {
    $rows = self::$db->insertRow("Insert into $this->tabla ($this->campo2, $this->campo3, $this->campo4, $this->campo5, $this->campo6) values ('$nombre' , $parcial, $final, $mejoramiento, $aprueba )" , null);             
  }

  function updateNotas($id,$nombre, $parcial, $final, $mejoramiento, $aprueba) {
    $rows = self::$db->updateRow("Update $this->tabla set $this->campo2 = '$nombre', $this->campo3 = $estado where $this->campo1 =$id", null);             
  }

}
?>

