<?php
namespace EJ\Chart;
class SeriesCornerRadiu {
    
  public function topLeft ($value) {
    $this -> topLeft = $value;
    return $this;
  }
  
  public function topRight ($value) {
    $this -> topRight = $value;
    return $this;
  }
  
  public function bottomLeft ($value) {
    $this -> bottomLeft = $value;
    return $this;
  }
  
  public function bottomRight ($value) {
    $this -> bottomRight = $value;
    return $this;
  }
  
}
  ?>