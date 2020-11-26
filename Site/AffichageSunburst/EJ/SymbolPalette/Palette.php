<?php
namespace EJ\SymbolPalette;
class Palette {
    
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function expanded ($value) {
    $this -> expanded = $value;
    return $this;
  }
  
  public function items ($value) {
    $this -> items = $value;
    return $this;
  }
  
}
  ?>