<?php
namespace EJ\Toolbar;
class Field {
    
  public function group ($value) {
    $this -> group = $value;
    return $this;
  }
  
  public function htmlAttributes ($value) {
    $this -> htmlAttributes = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function imageAttributes ($value) {
    $this -> imageAttributes = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function spriteCssClass ($value) {
    $this -> spriteCssClass = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function tooltipText ($value) {
    $this -> tooltipText = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
}
  ?>