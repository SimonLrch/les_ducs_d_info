<?php
namespace EJ\Ribbon;
class Defaults {
    
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function isBig ($value) {
    $this -> isBig = $value;
    return $this;
  }
  
}
  ?>