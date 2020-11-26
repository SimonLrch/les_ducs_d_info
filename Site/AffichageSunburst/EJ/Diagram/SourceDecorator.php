<?php
namespace EJ\Diagram;
class SourceDecorator {
    
  public function borderColor ($value) {
    $this -> borderColor = $value;
    return $this;
  }
  
  public function borderWidth ($value) {
    $this -> borderWidth = $value;
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
  
  public function height ($value) {
    $this -> height = $value;
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
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>