<?php
namespace EJ\Spreadsheet;
class Style {
    
  public function backgroundColor ($value) {
    $this -> backgroundColor = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function fontWeight ($value) {
    $this -> fontWeight = $value;
    return $this;
  }
  
}
  ?>