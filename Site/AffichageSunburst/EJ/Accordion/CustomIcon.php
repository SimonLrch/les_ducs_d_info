<?php
namespace EJ\Accordion;
class CustomIcon {
    
  public function header ($value) {
    $this -> header = $value;
    return $this;
  }
  
  public function selectedHeader ($value) {
    $this -> selectedHeader = $value;
    return $this;
  }
  
}
  ?>