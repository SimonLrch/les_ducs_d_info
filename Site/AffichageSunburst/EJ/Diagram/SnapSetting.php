<?php
namespace EJ\Diagram;
class SnapSetting {
    
  public function enableSnapToObject ($value) {
    $this -> enableSnapToObject = $value;
    return $this;
  }
  
  public function snapAngle ($value) {
    $this -> snapAngle = $value;
    return $this;
  }
  
  public function snapConstraints ($value) {
    $this -> snapConstraints = $value;
    return $this;
  }
  
  public function snapObjectDistance ($value) {
    $this -> snapObjectDistance = $value;
    return $this;
  }
  
  public function horizontalGridLines ($value) {
    $this -> horizontalGridLines = $value;
    return $this;
  }
  
  public function verticalGridLines ($value) {
    $this -> verticalGridLines = $value;
    return $this;
  }
  
}
  ?>