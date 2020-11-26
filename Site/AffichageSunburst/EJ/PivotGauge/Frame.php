<?php
namespace EJ\PivotGauge;
class Frame {
    
  public function frameType ($value) {
    $this -> frameType = $value;
    return $this;
  }
  
  public function halfCircleFrameEndAngle ($value) {
    $this -> halfCircleFrameEndAngle = $value;
    return $this;
  }
  
  public function halfCircleFrameStartAngle ($value) {
    $this -> halfCircleFrameStartAngle = $value;
    return $this;
  }
  
}
  ?>