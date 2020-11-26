<?php
namespace EJ\BulletGraph;
class FeatureMeasure {
    
  public function category ($value) {
    $this -> category = $value;
    return $this;
  }
  
  public function comparativeMeasureValue ($value) {
    $this -> comparativeMeasureValue = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
}
  ?>