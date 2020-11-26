<?php
namespace EJ\Chart;
class SeriesTrendline {
    
  public function visibility ($value) {
    $this -> visibility = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
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
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function dashArray ($value) {
    $this -> dashArray = $value;
    return $this;
  }
  
  public function forwardForecast ($value) {
    $this -> forwardForecast = $value;
    return $this;
  }
  
  public function backwardForecast ($value) {
    $this -> backwardForecast = $value;
    return $this;
  }
  
  public function polynomialOrder ($value) {
    $this -> polynomialOrder = $value;
    return $this;
  }
  
  public function period ($value) {
    $this -> period = $value;
    return $this;
  }
  
  public function visibleOnLegend ($value) {
    $this -> visibleOnLegend = $value;
    return $this;
  }
  
  public function intercept ($value) {
    $this -> intercept = $value;
    return $this;
  }
  
  public function tooltip ($value) {
    $this -> tooltip = $value;
    return $this;
  }
  
}
  ?>