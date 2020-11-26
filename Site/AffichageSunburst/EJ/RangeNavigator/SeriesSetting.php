<?php
namespace EJ\RangeNavigator;
class SeriesSetting {
    
  public function xName ($value) {
    $this -> xName = $value;
    return $this;
  }
  
  public function yName ($value) {
    $this -> yName = $value;
    return $this;
  }
  
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function enableAnimation ($value) {
    $this -> enableAnimation = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
}
  ?>