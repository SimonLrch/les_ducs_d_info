<?php
namespace EJ\Ribbon;
class BackstageSetting {
    
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function headerWidth ($value) {
    $this -> headerWidth = $value;
    return $this;
  }
  
  public function pages ($value) {
    $this -> pages = $value;
    return $this;
  }
  
}
  ?>