<?php
namespace EJ\Diagram;
class Layout {
    
  public function bounds ($value) {
    $this -> bounds = $value;
    return $this;
  }
  
  public function fixedNode ($value) {
    $this -> fixedNode = $value;
    return $this;
  }
  
  public function getLayoutInfo ($value) {
    $this -> getLayoutInfo = $value;
    return $this;
  }
  
  public function getConnectorSegments ($value) {
    $this -> getConnectorSegments = $value;
    return $this;
  }
  
  public function horizontalSpacing ($value) {
    $this -> horizontalSpacing = $value;
    return $this;
  }
  
  public function margin ($value) {
    $this -> margin = $value;
    return $this;
  }
  
  public function horizontalAlignment ($value) {
    $this -> horizontalAlignment = $value;
    return $this;
  }
  
  public function verticalAlignment ($value) {
    $this -> verticalAlignment = $value;
    return $this;
  }
  
  public function orientation ($value) {
    $this -> orientation = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function verticalSpacing ($value) {
    $this -> verticalSpacing = $value;
    return $this;
  }
  
  public function root ($value) {
    $this -> root = $value;
    return $this;
  }
  
  public function springLength ($value) {
    $this -> springLength = $value;
    return $this;
  }
  
  public function springFactor ($value) {
    $this -> springFactor = $value;
    return $this;
  }
  
  public function maxIteration ($value) {
    $this -> maxIteration = $value;
    return $this;
  }
  
  public function avoidSegmentOverlapping ($value) {
    $this -> avoidSegmentOverlapping = $value;
    return $this;
  }
  
}
  ?>