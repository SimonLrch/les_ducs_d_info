<?php
namespace EJ\BulletGraph;
class Symbol {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function imageURL ($value) {
    $this -> imageURL = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function shape ($value) {
    $this -> shape = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
}
  ?>