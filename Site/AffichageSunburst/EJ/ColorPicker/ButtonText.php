<?php
namespace EJ\ColorPicker;
class ButtonText {
    
  public function apply ($value) {
    $this -> apply = $value;
    return $this;
  }
  
  public function cancel ($value) {
    $this -> cancel = $value;
    return $this;
  }
  
  public function swatches ($value) {
    $this -> swatches = $value;
    return $this;
  }
  
}
  ?>