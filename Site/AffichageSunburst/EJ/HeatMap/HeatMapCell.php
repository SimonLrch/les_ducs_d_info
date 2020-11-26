<?php
namespace EJ\HeatMap;
class HeatMapCell {
    
  public function showContent ($value) {
    $this -> showContent = $value;
    return $this;
  }
  
  public function showColor ($value) {
    $this -> showColor = $value;
    return $this;
  }
  
}
  ?>