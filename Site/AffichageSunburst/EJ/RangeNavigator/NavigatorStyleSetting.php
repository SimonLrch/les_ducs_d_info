<?php
namespace EJ\RangeNavigator;
class NavigatorStyleSetting {
    
  public function background ($value) {
    $this -> background = $value;
    return $this;
  }
  
  public function leftThumbTemplate ($value) {
    $this -> leftThumbTemplate = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function rightThumbTemplate ($value) {
    $this -> rightThumbTemplate = $value;
    return $this;
  }
  
  public function selectedRegionColor ($value) {
    $this -> selectedRegionColor = $value;
    return $this;
  }
  
  public function selectedRegionOpacity ($value) {
    $this -> selectedRegionOpacity = $value;
    return $this;
  }
  
  public function thumbColor ($value) {
    $this -> thumbColor = $value;
    return $this;
  }
  
  public function thumbRadius ($value) {
    $this -> thumbRadius = $value;
    return $this;
  }
  
  public function thumbStroke ($value) {
    $this -> thumbStroke = $value;
    return $this;
  }
  
  public function unselectedRegionColor ($value) {
    $this -> unselectedRegionColor = $value;
    return $this;
  }
  
  public function unselectedRegionOpacity ($value) {
    $this -> unselectedRegionOpacity = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function majorGridLineStyle ($value) {
    $this -> majorGridLineStyle = $value;
    return $this;
  }
  
  public function minorGridLineStyle ($value) {
    $this -> minorGridLineStyle = $value;
    return $this;
  }
  
  public function highlightSettings ($value) {
    $this -> highlightSettings = $value;
    return $this;
  }
  
  public function selectionSettings ($value) {
    $this -> selectionSettings = $value;
    return $this;
  }
  
}
  ?>