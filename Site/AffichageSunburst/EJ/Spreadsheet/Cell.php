<?php
namespace EJ\Spreadsheet;
class Cell {
    
  public function index ($value) {
    $this -> index = $value;
    return $this;
  }
  
  public function isLocked ($value) {
    $this -> isLocked = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function comment ($value) {
    $this -> comment = $value;
    return $this;
  }
  
  public function format ($value) {
    $this -> format = $value;
    return $this;
  }
  
  public function hyperlink ($value) {
    $this -> hyperlink = $value;
    return $this;
  }
  
  public function style ($value) {
    $this -> style = $value;
    return $this;
  }
  
}
  ?>