<?php
namespace EJ\HeatMapLegend;
class ColorMappingCollection {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function label ($value) {
    $this -> label = $value;
    return $this;
  }
  
}
  ?>