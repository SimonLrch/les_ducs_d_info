<?php
namespace EJ\Chart;
class AxesAxisLine {
    
  public function dashArray ($value) {
    $this -> dashArray = $value;
    return $this;
  }
  
  public function offset ($value) {
    $this -> offset = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>