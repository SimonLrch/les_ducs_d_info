<?php
namespace EJ\Diagram;
class Port {
    
  public function borderColor ($value) {
    $this -> borderColor = $value;
    return $this;
  }
  
  public function borderWidth ($value) {
    $this -> borderWidth = $value;
    return $this;
  }
  
  public function connectorPadding ($value) {
    $this -> connectorPadding = $value;
    return $this;
  }
  
  public function constraints ($value) {
    $this -> constraints = $value;
    return $this;
  }
  
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
  public function fillColor ($value) {
    $this -> fillColor = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function offset ($value) {
    $this -> offset = $value;
    return $this;
  }
  
  public function pathData ($value) {
    $this -> pathData = $value;
    return $this;
  }
  
  public function shape ($value) {
    $this -> shape = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function visibility ($value) {
    $this -> visibility = $value;
    return $this;
  }
  
  public function parent ($value) {
    $this -> parent = $value;
    return $this;
  }
  
}
  ?>