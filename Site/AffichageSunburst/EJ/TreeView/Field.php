<?php
namespace EJ\TreeView;
class Field {
    
  public function child ($value) {
    $this -> child = $value;
    return $this;
  }
  
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function expanded ($value) {
    $this -> expanded = $value;
    return $this;
  }
  
  public function hasChild ($value) {
    $this -> hasChild = $value;
    return $this;
  }
  
  public function htmlAttribute ($value) {
    $this -> htmlAttribute = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function imageAttribute ($value) {
    $this -> imageAttribute = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function isChecked ($value) {
    $this -> isChecked = $value;
    return $this;
  }
  
  public function linkAttribute ($value) {
    $this -> linkAttribute = $value;
    return $this;
  }
  
  public function parentId ($value) {
    $this -> parentId = $value;
    return $this;
  }
  
  public function query ($value) {
    $this -> query = $value;
    return $this;
  }
  
  public function selected ($value) {
    $this -> selected = $value;
    return $this;
  }
  
  public function spriteCssClass ($value) {
    $this -> spriteCssClass = $value;
    return $this;
  }
  
  public function tableName ($value) {
    $this -> tableName = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
}
  ?>