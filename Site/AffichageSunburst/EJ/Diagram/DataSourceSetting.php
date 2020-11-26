<?php
namespace EJ\Diagram;
class DataSourceSetting {
    
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function parent ($value) {
    $this -> parent = $value;
    return $this;
  }
  
  public function query ($value) {
    $this -> query = $value;
    return $this;
  }
  
  public function root ($value) {
    $this -> root = $value;
    return $this;
  }
  
  public function tableName ($value) {
    $this -> tableName = $value;
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
  
  public function connectionDataSource ($value) {
    $this -> connectionDataSource = $value;
    return $this;
  }
  
}
  ?>