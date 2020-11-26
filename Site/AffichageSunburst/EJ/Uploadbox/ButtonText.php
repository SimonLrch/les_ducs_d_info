<?php
namespace EJ\Uploadbox;
class ButtonText {
    
  public function browse ($value) {
    $this -> browse = $value;
    return $this;
  }
  
  public function cancel ($value) {
    $this -> cancel = $value;
    return $this;
  }
  
  public function Close ($value) {
    $this -> Close = $value;
    return $this;
  }
  
  public function upload ($value) {
    $this -> upload = $value;
    return $this;
  }
  
}
  ?>