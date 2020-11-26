<?php
namespace EJ\Ribbon;
class Page {
    
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function itemType ($value) {
    $this -> itemType = $value;
    return $this;
  }
  
  public function contentID ($value) {
    $this -> contentID = $value;
    return $this;
  }
  
  public function enableSeparator ($value) {
    $this -> enableSeparator = $value;
    return $this;
  }
  
}
  ?>