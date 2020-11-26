<?php
namespace EJ\BulletGraph;
class QualitativeRange {
    
  public function rangeEnd ($value) {
    $this -> rangeEnd = $value;
    return $this;
  }
  
  public function rangeOpacity ($value) {
    $this -> rangeOpacity = $value;
    return $this;
  }
  
  public function rangeStroke ($value) {
    $this -> rangeStroke = $value;
    return $this;
  }
  
}
  ?>