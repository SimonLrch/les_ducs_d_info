<?php
namespace EJ\BulletGraph;
class QuantitativeScaleSetting {
    
  public function interval ($value) {
    $this -> interval = $value;
    return $this;
  }
  
  public function maximum ($value) {
    $this -> maximum = $value;
    return $this;
  }
  
  public function minimum ($value) {
    $this -> minimum = $value;
    return $this;
  }
  
  public function minorTicksPerInterval ($value) {
    $this -> minorTicksPerInterval = $value;
    return $this;
  }
  
  public function tickPlacement ($value) {
    $this -> tickPlacement = $value;
    return $this;
  }
  
  public function tickPosition ($value) {
    $this -> tickPosition = $value;
    return $this;
  }
  
  public function comparativeMeasureSettings ($value) {
    $this -> comparativeMeasureSettings = $value;
    return $this;
  }
  
  public function featuredMeasureSettings ($value) {
    $this -> featuredMeasureSettings = $value;
    return $this;
  }
  
  public function featureMeasures ($value) {
    $this -> featureMeasures = $value;
    return $this;
  }
  
  public function fields ($value) {
    $this -> fields = $value;
    return $this;
  }
  
  public function labelSettings ($value) {
    $this -> labelSettings = $value;
    return $this;
  }
  
  public function location ($value) {
    $this -> location = $value;
    return $this;
  }
  
  public function majorTickSettings ($value) {
    $this -> majorTickSettings = $value;
    return $this;
  }
  
  public function minorTickSettings ($value) {
    $this -> minorTickSettings = $value;
    return $this;
  }
  
}
  ?>