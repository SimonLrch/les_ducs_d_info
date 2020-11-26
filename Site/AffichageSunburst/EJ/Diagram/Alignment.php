<?php
namespace EJ\Diagram;
class Alignment {
    
  public function horizontal ($value) {
    $this -> horizontal = $value;
    return $this;
  }
  
  public function vertical ($value) {
    $this -> vertical = $value;
    return $this;
  }
  
}
  ?>