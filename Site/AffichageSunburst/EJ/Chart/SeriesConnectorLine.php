<?php
namespace EJ\Chart;
class SeriesConnectorLine {
    
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function dashArray ($value) {
    $this -> dashArray = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
}
  ?>