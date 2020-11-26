<?php
namespace EJ\PivotGauge;
class DataSource {
    
  public function cube ($value) {
    $this -> cube = $value;
    return $this;
  }
  
  public function sourceInfo ($value) {
    $this -> sourceInfo = $value;
    return $this;
  }
  
  public function providerName ($value) {
    $this -> providerName = $value;
    return $this;
  }
  
  public function data ($value) {
    $this -> data = $value;
    return $this;
  }
  
  public function catalog ($value) {
    $this -> catalog = $value;
    return $this;
  }
  
  public function columns ($value) {
    $this -> columns = $value;
    return $this;
  }
  
  public function rows ($value) {
    $this -> rows = $value;
    return $this;
  }
  
  public function values ($value) {
    $this -> values = $value;
    return $this;
  }
  
  public function filters ($value) {
    $this -> filters = $value;
    return $this;
  }
  
}
  ?>