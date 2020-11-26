<?php
namespace EJ\TreeMap;
class LegendSetting {
    
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function iconHeight ($value) {
    $this -> iconHeight = $value;
    return $this;
  }
  
  public function iconWidth ($value) {
    $this -> iconWidth = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
  public function mode ($value) {
    $this -> mode = $value;
    return $this;
  }
  
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
  public function leftLabel ($value) {
    $this -> leftLabel = $value;
    return $this;
  }
  
  public function rightLabel ($value) {
    $this -> rightLabel = $value;
    return $this;
  }
  
  public function dockPosition ($value) {
    $this -> dockPosition = $value;
    return $this;
  }
  
  public function alignment ($value) {
    $this -> alignment = $value;
    return $this;
  }
  
  public function columnCount ($value) {
    $this -> columnCount = $value;
    return $this;
  }
  
}
  ?>