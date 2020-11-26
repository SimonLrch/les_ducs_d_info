<?php
namespace EJ\Spreadsheet;
class NameManager {
    
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function refersto ($value) {
    $this -> refersto = $value;
    return $this;
  }
  
}
  ?>