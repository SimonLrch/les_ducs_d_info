<?php
namespace EJ\BulletGraph;
class Indicator {
    
  public function padding ($value) {
    $this -> padding = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function textAlignment ($value) {
    $this -> textAlignment = $value;
    return $this;
  }
  
  public function textAnchor ($value) {
    $this -> textAnchor = $value;
    return $this;
  }
  
  public function textAngle ($value) {
    $this -> textAngle = $value;
    return $this;
  }
  
  public function textPosition ($value) {
    $this -> textPosition = $value;
    return $this;
  }
  
  public function textSpacing ($value) {
    $this -> textSpacing = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
  public function location ($value) {
    $this -> location = $value;
    return $this;
  }
  
  public function symbol ($value) {
    $this -> symbol = $value;
    return $this;
  }
  
}
  ?>