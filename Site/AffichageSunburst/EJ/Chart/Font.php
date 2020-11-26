<?php
namespace EJ\Chart;
class Font {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function fontFamily ($value) {
    $this -> fontFamily = $value;
    return $this;
  }
  
  public function fontStyle ($value) {
    $this -> fontStyle = $value;
    return $this;
  }
  
  public function fontWeight ($value) {
    $this -> fontWeight = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
}
  ?>