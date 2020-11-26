<?php
namespace EJ\CircularGauge;
class Pointer {
    
  public function backgroundColor ($value) {
    $this -> backgroundColor = $value;
    return $this;
  }
  
  public function backNeedleLength ($value) {
    $this -> backNeedleLength = $value;
    return $this;
  }
  
  public function distanceFromScale ($value) {
    $this -> distanceFromScale = $value;
    return $this;
  }
  
  public function gradients ($value) {
    $this -> gradients = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function length ($value) {
    $this -> length = $value;
    return $this;
  }
  
  public function markerType ($value) {
    $this -> markerType = $value;
    return $this;
  }
  
  public function needleType ($value) {
    $this -> needleType = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function radius ($value) {
    $this -> radius = $value;
    return $this;
  }
  
  public function placement ($value) {
    $this -> placement = $value;
    return $this;
  }
  
  public function showBackNeedle ($value) {
    $this -> showBackNeedle = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function pointerValueText ($value) {
    $this -> pointerValueText = $value;
    return $this;
  }
  
}
  ?>