<?php
namespace EJ\Diagram;
class Shape {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function flow ($value) {
    $this -> flow = $value;
    return $this;
  }
  
  public function association ($value) {
    $this -> association = $value;
    return $this;
  }
  
  public function message ($value) {
    $this -> message = $value;
    return $this;
  }
  
  public function sequence ($value) {
    $this -> sequence = $value;
    return $this;
  }
  
  public function relationship ($value) {
    $this -> relationship = $value;
    return $this;
  }
  
  public function ActivityFlow ($value) {
    $this -> ActivityFlow = $value;
    return $this;
  }
  
  public function multiplicity ($value) {
    $this -> multiplicity = $value;
    return $this;
  }
  
}
  ?>