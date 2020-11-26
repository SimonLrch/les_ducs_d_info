<?php
namespace EJ\Diagram;
class RadialGradient {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function cx ($value) {
    $this -> cx = $value;
    return $this;
  }
  
  public function cy ($value) {
    $this -> cy = $value;
    return $this;
  }
  
  public function fx ($value) {
    $this -> fx = $value;
    return $this;
  }
  
  public function fy ($value) {
    $this -> fy = $value;
    return $this;
  }
  
  public function stops ($value) {
    $this -> stops = $value;
    return $this;
  }
  
}
  ?>