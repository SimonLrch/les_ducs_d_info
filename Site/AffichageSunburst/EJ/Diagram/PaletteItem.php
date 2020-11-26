<?php
namespace EJ\Diagram;
class PaletteItem {
    
  public function enableScale ($value) {
    $this -> enableScale = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function label ($value) {
    $this -> label = $value;
    return $this;
  }
  
  public function margin ($value) {
    $this -> margin = $value;
    return $this;
  }
  
  public function previewHeight ($value) {
    $this -> previewHeight = $value;
    return $this;
  }
  
  public function previewWidth ($value) {
    $this -> previewWidth = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>