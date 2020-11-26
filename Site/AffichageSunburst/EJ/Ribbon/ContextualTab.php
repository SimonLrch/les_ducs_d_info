<?php
namespace EJ\Ribbon;
class ContextualTab {
    
  public function backgroundColor ($value) {
    $this -> backgroundColor = $value;
    return $this;
  }
  
  public function borderColor ($value) {
    $this -> borderColor = $value;
    return $this;
  }
  
  public function tabs ($value) {
    $this -> tabs = $value;
    return $this;
  }
  
}
  ?>