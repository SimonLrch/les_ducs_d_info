<?php
namespace EJ\Map;
class BubbleSetting {
    
  public function bubbleOpacity ($value) {
    $this -> bubbleOpacity = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function colorValuePath ($value) {
    $this -> colorValuePath = $value;
    return $this;
  }
  
  public function maxValue ($value) {
    $this -> maxValue = $value;
    return $this;
  }
  
  public function minValue ($value) {
    $this -> minValue = $value;
    return $this;
  }
  
  public function showBubble ($value) {
    $this -> showBubble = $value;
    return $this;
  }
  
  public function showTooltip ($value) {
    $this -> showTooltip = $value;
    return $this;
  }
  
  public function tooltipTemplate ($value) {
    $this -> tooltipTemplate = $value;
    return $this;
  }
  
  public function valuePath ($value) {
    $this -> valuePath = $value;
    return $this;
  }
  
  public function colorMappings ($value) {
    $this -> colorMappings = $value;
    return $this;
  }
  
}
  ?>