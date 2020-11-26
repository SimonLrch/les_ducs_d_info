<?php
namespace EJ\Spreadsheet;
class Row {
    
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function index ($value) {
    $this -> index = $value;
    return $this;
  }
  
  public function cells ($value) {
    $this -> cells = $value;
    return $this;
  }
  
}
  ?>