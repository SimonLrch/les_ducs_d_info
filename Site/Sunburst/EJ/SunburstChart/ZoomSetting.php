<?php
namespace EJ\SunburstChart;
class ZoomSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function toolbarHorizontalAlignment ($value) {
    $this -> toolbarHorizontalAlignment = $value;
    return $this;
  }
  
  public function toolbarVerticalAlignment ($value) {
    $this -> toolbarVerticalAlignment = $value;
    return $this;
  }
  
}
  ?>