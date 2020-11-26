<?php
namespace EJ\Schedule;
class ResourceSetting {
    
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function groupId ($value) {
    $this -> groupId = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function start ($value) {
    $this -> start = $value;
    return $this;
  }
  
  public function end ($value) {
    $this -> end = $value;
    return $this;
  }
  
  public function workWeek ($value) {
    $this -> workWeek = $value;
    return $this;
  }
  
  public function appointmentClass ($value) {
    $this -> appointmentClass = $value;
    return $this;
  }
  
}
  ?>