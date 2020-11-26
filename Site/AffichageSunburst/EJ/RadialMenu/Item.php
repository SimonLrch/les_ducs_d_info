<?php
namespace EJ\RadialMenu;
class Item {
    
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function prependTo ($value) {
    $this -> prependTo = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function enabled ($value) {
    $this -> enabled = $value;
    return $this;
  }
  
  public function click ($value) {
    $this -> click = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function items ($value) {
    $this -> items = $value;
    return $this;
  }
  
  public function badge ($value) {
    $this -> badge = $value;
    return $this;
  }
  
  public function sliderSettings ($value) {
    $this -> sliderSettings = $value;
    return $this;
  }
  
}
  ?>