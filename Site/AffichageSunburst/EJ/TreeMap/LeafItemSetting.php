<?php
namespace EJ\TreeMap;
class LeafItemSetting {
    
  public function borderBrush ($value) {
    $this -> borderBrush = $value;
    return $this;
  }
  
  public function borderThickness ($value) {
    $this -> borderThickness = $value;
    return $this;
  }
  
  public function gap ($value) {
    $this -> gap = $value;
    return $this;
  }
  
  public function itemTemplate ($value) {
    $this -> itemTemplate = $value;
    return $this;
  }
  
  public function labelPath ($value) {
    $this -> labelPath = $value;
    return $this;
  }
  
  public function labelPosition ($value) {
    $this -> labelPosition = $value;
    return $this;
  }
  
  public function textOverflow ($value) {
    $this -> textOverflow = $value;
    return $this;
  }
  
  public function labelVisibilityMode ($value) {
    $this -> labelVisibilityMode = $value;
    return $this;
  }
  
  public function showLabels ($value) {
    $this -> showLabels = $value;
    return $this;
  }
  
}
  ?>