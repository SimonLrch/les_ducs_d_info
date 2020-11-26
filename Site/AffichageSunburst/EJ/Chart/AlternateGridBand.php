<?php
namespace EJ\Chart;
class AlternateGridBand {
    
  public function even ($value) {
    $this -> even = $value;
    return $this;
  }
  
  public function odd ($value) {
    $this -> odd = $value;
    return $this;
  }
  
}
  ?>