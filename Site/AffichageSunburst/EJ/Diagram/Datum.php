<?php
namespace EJ\Diagram;
class Datum {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function collection ($value) {
    $this -> collection = $value;
    return $this;
  }
  
}
  ?>