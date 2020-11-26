<?php
namespace EJ\Chart;
class SeriesErrorBar {
    
  public function visibility ($value) {
    $this -> visibility = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function mode ($value) {
    $this -> mode = $value;
    return $this;
  }
  
  public function direction ($value) {
    $this -> direction = $value;
    return $this;
  }
  
  public function verticalErrorValue ($value) {
    $this -> verticalErrorValue = $value;
    return $this;
  }
  
  public function horizontalErrorValue ($value) {
    $this -> horizontalErrorValue = $value;
    return $this;
  }
  
  public function horizontalPositiveErrorValue ($value) {
    $this -> horizontalPositiveErrorValue = $value;
    return $this;
  }
  
  public function horizontalNegativeErrorValue ($value) {
    $this -> horizontalNegativeErrorValue = $value;
    return $this;
  }
  
  public function verticalPositiveErrorValue ($value) {
    $this -> verticalPositiveErrorValue = $value;
    return $this;
  }
  
  public function verticalNegativeErrorValue ($value) {
    $this -> verticalNegativeErrorValue = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function cap ($value) {
    $this -> cap = $value;
    return $this;
  }
  
}
  ?>