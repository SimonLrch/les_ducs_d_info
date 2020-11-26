<?php
namespace EJ\Grid;
class Command {
    
  public function buttonOptions ($value) {
    $this -> buttonOptions = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
}
  ?>