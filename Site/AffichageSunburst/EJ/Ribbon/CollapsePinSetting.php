<?php
namespace EJ\Ribbon;
class CollapsePinSetting {
    
  public function toolTip ($value) {
    $this -> toolTip = $value;
    return $this;
  }
  
  public function customToolTip ($value) {
    $this -> customToolTip = $value;
    return $this;
  }
  
}
  ?>