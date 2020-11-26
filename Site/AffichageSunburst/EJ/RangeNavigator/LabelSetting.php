<?php
namespace EJ\RangeNavigator;
class LabelSetting {
    
  public function higherLevel ($value) {
    $this -> higherLevel = $value;
    return $this;
  }
  
  public function lowerLevel ($value) {
    $this -> lowerLevel = $value;
    return $this;
  }
  
  public function style ($value) {
    $this -> style = $value;
    return $this;
  }
  
}
  ?>