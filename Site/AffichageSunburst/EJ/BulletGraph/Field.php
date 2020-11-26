<?php
namespace EJ\BulletGraph;
class Field {
    
  public function category ($value) {
    $this -> category = $value;
    return $this;
  }
  
  public function comparativeMeasure ($value) {
    $this -> comparativeMeasure = $value;
    return $this;
  }
  
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function featureMeasures ($value) {
    $this -> featureMeasures = $value;
    return $this;
  }
  
  public function query ($value) {
    $this -> query = $value;
    return $this;
  }
  
  public function tableName ($value) {
    $this -> tableName = $value;
    return $this;
  }
  
}
  ?>