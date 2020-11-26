<?php
namespace EJ\ComboBox;
class Field {
    
  public function groupBy ($value) {
    $this -> groupBy = $value;
    return $this;
  }
  
  public function iconCss ($value) {
    $this -> iconCss = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
}
  ?>