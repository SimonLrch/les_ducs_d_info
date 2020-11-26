<?php
namespace EJ\Diagram;
class SubProces {
    
  public function adhoc ($value) {
    $this -> adhoc = $value;
    return $this;
  }
  
  public function boundary ($value) {
    $this -> boundary = $value;
    return $this;
  }
  
  public function compensation ($value) {
    $this -> compensation = $value;
    return $this;
  }
  
  public function collapsed ($value) {
    $this -> collapsed = $value;
    return $this;
  }
  
  public function event ($value) {
    $this -> event = $value;
    return $this;
  }
  
  public function loop ($value) {
    $this -> loop = $value;
    return $this;
  }
  
  public function Processes ($value) {
    $this -> Processes = $value;
    return $this;
  }
  
  public function trigger ($value) {
    $this -> trigger = $value;
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