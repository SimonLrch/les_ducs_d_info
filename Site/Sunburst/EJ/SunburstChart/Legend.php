<?php
namespace EJ\SunburstChart;
class Legend {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function clickAction ($value) {
    $this -> clickAction = $value;
    return $this;
  }
  
  public function alignment ($value) {
    $this -> alignment = $value;
    return $this;
  }
  
  public function columnCount ($value) {
    $this -> columnCount = $value;
    return $this;
  }
  
  public function rowCount ($value) {
    $this -> rowCount = $value;
    return $this;
  }
  
  public function itemPadding ($value) {
    $this -> itemPadding = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
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
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
  public function itemStyle ($value) {
    $this -> itemStyle = $value;
    return $this;
  }
  
  public function location ($value) {
    $this -> location = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
}
  ?>