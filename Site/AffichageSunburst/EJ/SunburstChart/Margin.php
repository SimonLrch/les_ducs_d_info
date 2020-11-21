<?php
namespace EJ\SunburstChart;
class Margin {
    
  public function left ($value) {
    $this -> left = $value;
    return $this;
  }
  
  public function right ($value) {
    $this -> right = $value;
    return $this;
  }
  
  public function top ($value) {
    $this -> top = $value;
    return $this;
  }
  
  public function bottom ($value) {
    $this -> bottom = $value;
    return $this;
  }
  
}
  ?>