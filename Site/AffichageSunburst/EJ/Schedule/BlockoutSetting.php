<?php
namespace EJ\Schedule;
class BlockoutSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function templateId ($value) {
    $this -> templateId = $value;
    return $this;
  }
  
  public function dataSource ($value) {
    $this -> dataSource = $value;
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
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function startTime ($value) {
    $this -> startTime = $value;
    return $this;
  }
  
  public function endTime ($value) {
    $this -> endTime = $value;
    return $this;
  }
  
  public function subject ($value) {
    $this -> subject = $value;
    return $this;
  }
  
  public function isBlockAppointment ($value) {
    $this -> isBlockAppointment = $value;
    return $this;
  }
  
  public function isAllDay ($value) {
    $this -> isAllDay = $value;
    return $this;
  }
  
  public function resourceId ($value) {
    $this -> resourceId = $value;
    return $this;
  }
  
  public function groupId ($value) {
    $this -> groupId = $value;
    return $this;
  }
  
  public function customStyle ($value) {
    $this -> customStyle = $value;
    return $this;
  }
  
}
  ?>