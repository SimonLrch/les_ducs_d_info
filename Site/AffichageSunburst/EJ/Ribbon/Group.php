<?php
namespace EJ\Ribbon;
class Group {
    
  public function alignType ($value) {
    $this -> alignType = $value;
    return $this;
  }
  
  public function contentID ($value) {
    $this -> contentID = $value;
    return $this;
  }
  
  public function customContent ($value) {
    $this -> customContent = $value;
    return $this;
  }
  
  public function enableGroupExpander ($value) {
    $this -> enableGroupExpander = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function content ($value) {
    $this -> content = $value;
    return $this;
  }
  
  public function groupExpanderSettings ($value) {
    $this -> groupExpanderSettings = $value;
    return $this;
  }
  
}
  ?>