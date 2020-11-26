<?php
namespace EJ\Tooltip;
class Tip {
    
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function adjust ($value) {
    $this -> adjust = $value;
    return $this;
  }
  
}
  ?>