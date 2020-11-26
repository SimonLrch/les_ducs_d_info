<?php
namespace EJ\Tile;
class LiveTile {
    
  public function enabled ($value) {
    $this -> enabled = $value;
    return $this;
  }
  
  public function imageClass ($value) {
    $this -> imageClass = $value;
    return $this;
  }
  
  public function imageTemplateId ($value) {
    $this -> imageTemplateId = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function updateInterval ($value) {
    $this -> updateInterval = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
}
  ?>