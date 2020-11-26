<?php
namespace EJ\GroupButton;
Class GroupButtonItem {
    
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function  text ($value) {
    $this ->  text = $value;
    return $this;
  }
  
  public function  url ($value) {
    $this ->  url = $value;
    return $this;
  }
  
    
  public function getObject() {
    return  $this ;
  }
  
}
  ?>