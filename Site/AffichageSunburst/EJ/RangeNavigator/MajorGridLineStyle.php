<?php
namespace EJ\RangeNavigator;
class MajorGridLineStyle {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
}
  ?>