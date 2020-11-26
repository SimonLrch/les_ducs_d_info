<?php
namespace EJ\TagCloud;
class Field {
    
  public function frequency ($value) {
    $this -> frequency = $value;
    return $this;
  }
  
  public function htmlAttributes ($value) {
    $this -> htmlAttributes = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function url ($value) {
    $this -> url = $value;
    return $this;
  }
  
}
  ?>