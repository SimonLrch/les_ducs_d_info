<?php
namespace EJ\Dialog;
class AjaxSetting {
    
  public function async ($value) {
    $this -> async = $value;
    return $this;
  }
  
  public function cache ($value) {
    $this -> cache = $value;
    return $this;
  }
  
  public function contentType ($value) {
    $this -> contentType = $value;
    return $this;
  }
  
  public function data ($value) {
    $this -> data = $value;
    return $this;
  }
  
  public function dataType ($value) {
    $this -> dataType = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
}
  ?>