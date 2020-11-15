<?php
namespace EJ\SunburstChart;
class Subtitle {
    
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function textAlignment ($value) {
    $this -> textAlignment = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>