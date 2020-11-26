<?php
namespace EJ\Spreadsheet;
class CFormatRule {
    
  public function action ($value) {
    $this -> action = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function inputs ($value) {
    $this -> inputs = $value;
    return $this;
  }
  
  public function range ($value) {
    $this -> range = $value;
    return $this;
  }
  
}
  ?>