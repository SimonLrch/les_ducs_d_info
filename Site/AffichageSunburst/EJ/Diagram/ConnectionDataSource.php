<?php
namespace EJ\Diagram;
class ConnectionDataSource {
    
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function sourceNode ($value) {
    $this -> sourceNode = $value;
    return $this;
  }
  
  public function targetNode ($value) {
    $this -> targetNode = $value;
    return $this;
  }
  
  public function sourcePointX ($value) {
    $this -> sourcePointX = $value;
    return $this;
  }
  
  public function sourcePointY ($value) {
    $this -> sourcePointY = $value;
    return $this;
  }
  
  public function targetPointX ($value) {
    $this -> targetPointX = $value;
    return $this;
  }
  
  public function targetPointY ($value) {
    $this -> targetPointY = $value;
    return $this;
  }
  
  public function customFields ($value) {
    $this -> customFields = $value;
    return $this;
  }
  
  public function crudAction ($value) {
    $this -> crudAction = $value;
    return $this;
  }
  
}
  ?>