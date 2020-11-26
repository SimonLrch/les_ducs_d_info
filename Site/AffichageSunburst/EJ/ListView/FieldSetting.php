<?php
namespace EJ\ListView;
class FieldSetting {
    
  public function checked ($value) {
    $this -> checked = $value;
    return $this;
  }
  
  public function navigateUrl ($value) {
    $this -> navigateUrl = $value;
    return $this;
  }
  
  public function attributes ($value) {
    $this -> attributes = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function imageClass ($value) {
    $this -> imageClass = $value;
    return $this;
  }
  
  public function preventSelection ($value) {
    $this -> preventSelection = $value;
    return $this;
  }
  
  public function persistSelection ($value) {
    $this -> persistSelection = $value;
    return $this;
  }
  
  public function primaryKey ($value) {
    $this -> primaryKey = $value;
    return $this;
  }
  
  public function parentPrimaryKey ($value) {
    $this -> parentPrimaryKey = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function mouseUP ($value) {
    $this -> mouseUP = $value;
    return $this;
  }
  
  public function mouseDown ($value) {
    $this -> mouseDown = $value;
    return $this;
  }
  
}
  ?>