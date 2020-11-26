<?php
namespace EJ\Chart;
class SeriesBorder {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function dashArray ($value) {
    $this -> dashArray = $value;
    return $this;
  }
  
}
  ?>