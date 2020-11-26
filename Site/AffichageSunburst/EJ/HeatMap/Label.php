<?php
namespace EJ\HeatMap;
class Label {
    
  public function bold ($value) {
    $this -> bold = $value;
    return $this;
  }
  
  public function italic ($value) {
    $this -> italic = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function textDecoration ($value) {
    $this -> textDecoration = $value;
    return $this;
  }
  
  public function fontSize ($value) {
    $this -> fontSize = $value;
    return $this;
  }
  
  public function fontFamily ($value) {
    $this -> fontFamily = $value;
    return $this;
  }
  
  public function fontColor ($value) {
    $this -> fontColor = $value;
    return $this;
  }
  
}
  ?>