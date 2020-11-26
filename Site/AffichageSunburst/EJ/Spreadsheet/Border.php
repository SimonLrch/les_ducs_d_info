<?php
namespace EJ\Spreadsheet;
class Border {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function range ($value) {
    $this -> range = $value;
    return $this;
  }
  
}
  ?>