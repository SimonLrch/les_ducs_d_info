<?php
namespace EJ\Spreadsheet;
class Comment {
    
  public function isVisible ($value) {
    $this -> isVisible = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
}
  ?>