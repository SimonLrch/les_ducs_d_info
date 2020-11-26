<?php
namespace EJ\Diagram;
class VerticalGridLine {
    
  public function lineColor ($value) {
    $this -> lineColor = $value;
    return $this;
  }
  
  public function lineDashArray ($value) {
    $this -> lineDashArray = $value;
    return $this;
  }
  
  public function linesInterval ($value) {
    $this -> linesInterval = $value;
    return $this;
  }
  
  public function snapInterval ($value) {
    $this -> snapInterval = $value;
    return $this;
  }
  
}
  ?>