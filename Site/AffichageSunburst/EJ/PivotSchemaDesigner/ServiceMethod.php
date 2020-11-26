<?php
namespace EJ\PivotSchemaDesigner;
class ServiceMethod {
    
  public function fetchMembers ($value) {
    $this -> fetchMembers = $value;
    return $this;
  }
  
  public function filtering ($value) {
    $this -> filtering = $value;
    return $this;
  }
  
  public function memberExpand ($value) {
    $this -> memberExpand = $value;
    return $this;
  }
  
  public function nodeDropped ($value) {
    $this -> nodeDropped = $value;
    return $this;
  }
  
  public function nodeStateModified ($value) {
    $this -> nodeStateModified = $value;
    return $this;
  }
  
  public function removeButton ($value) {
    $this -> removeButton = $value;
    return $this;
  }
  
}
  ?>