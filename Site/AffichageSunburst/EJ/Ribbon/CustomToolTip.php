<?php
namespace EJ\Ribbon;
class CustomToolTip {
    
  public function content ($value) {
    $this -> content = $value;
    return $this;
  }
  
  public function prefixIcon ($value) {
    $this -> prefixIcon = $value;
    return $this;
  }
  
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
}
  ?>