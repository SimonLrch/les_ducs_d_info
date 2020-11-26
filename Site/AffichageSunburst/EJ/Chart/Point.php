<?php
namespace EJ\Chart;
class Point {
    
  public function visibleOnLegend ($value) {
    $this -> visibleOnLegend = $value;
    return $this;
  }
  
  public function showIntermediateSum ($value) {
    $this -> showIntermediateSum = $value;
    return $this;
  }
  
  public function showTotalSum ($value) {
    $this -> showTotalSum = $value;
    return $this;
  }
  
  public function close ($value) {
    $this -> close = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function high ($value) {
    $this -> high = $value;
    return $this;
  }
  
  public function low ($value) {
    $this -> low = $value;
    return $this;
  }
  
  public function open ($value) {
    $this -> open = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function x ($value) {
    $this -> x = $value;
    return $this;
  }
  
  public function y ($value) {
    $this -> y = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function marker ($value) {
    $this -> marker = $value;
    return $this;
  }
  
}
  ?>