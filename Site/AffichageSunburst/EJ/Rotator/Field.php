<?php
namespace EJ\Rotator;
class Field {
    
  public function linkAttribute ($value) {
    $this -> linkAttribute = $value;
    return $this;
  }
  
  public function targetAttribute ($value) {
    $this -> targetAttribute = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function thumbnailText ($value) {
    $this -> thumbnailText = $value;
    return $this;
  }
  
  public function thumbnailUrl ($value) {
    $this -> thumbnailUrl = $value;
    return $this;
  }
  
  public function url ($value) {
    $this -> url = $value;
    return $this;
  }
  
}
  ?>