<?php
namespace EJ\Diagram;
class Task {
    
  public function call ($value) {
    $this -> call = $value;
    return $this;
  }
  
  public function compensation ($value) {
    $this -> compensation = $value;
    return $this;
  }
  
  public function loop ($value) {
    $this -> loop = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function events ($value) {
    $this -> events = $value;
    return $this;
  }
  
}
  ?>