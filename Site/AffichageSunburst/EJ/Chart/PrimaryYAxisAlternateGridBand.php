<?php
namespace EJ\Chart;
class PrimaryYAxisAlternateGridBand {
    
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