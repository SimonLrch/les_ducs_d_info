<?php
namespace EJ\DigitalGauge;
class Item {
    
  public function enableCustomFont ($value) {
    $this -> enableCustomFont = $value;
    return $this;
  }
  
  public function shadowBlur ($value) {
    $this -> shadowBlur = $value;
    return $this;
  }
  
  public function shadowColor ($value) {
    $this -> shadowColor = $value;
    return $this;
  }
  
  public function shadowOffsetX ($value) {
    $this -> shadowOffsetX = $value;
    return $this;
  }
  
  public function shadowOffsetY ($value) {
    $this -> shadowOffsetY = $value;
    return $this;
  }
  
  public function textAlign ($value) {
    $this -> textAlign = $value;
    return $this;
  }
  
  public function textColor ($value) {
    $this -> textColor = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function characterSettings ($value) {
    $this -> characterSettings = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function segmentSettings ($value) {
    $this -> segmentSettings = $value;
    return $this;
  }
  
}
  ?>