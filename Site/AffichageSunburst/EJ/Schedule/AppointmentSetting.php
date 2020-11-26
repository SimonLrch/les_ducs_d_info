<?php
namespace EJ\Schedule;
class AppointmentSetting {
    
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
  
  public function applyTimeOffset ($value) {
    $this -> applyTimeOffset = $value;
    return $this;
  }
  
  public function editFutureEventsOnly ($value) {
    $this -> editFutureEventsOnly = $value;
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
  
  public function description ($value) {
    $this -> description = $value;
    return $this;
  }
  
  public function recurrence ($value) {
    $this -> recurrence = $value;
    return $this;
  }
  
  public function recurrenceRule ($value) {
    $this -> recurrenceRule = $value;
    return $this;
  }
  
  public function allDay ($value) {
    $this -> allDay = $value;
    return $this;
  }
  
  public function resourceFields ($value) {
    $this -> resourceFields = $value;
    return $this;
  }
  
  public function categorize ($value) {
    $this -> categorize = $value;
    return $this;
  }
  
  public function location ($value) {
    $this -> location = $value;
    return $this;
  }
  
  public function priority ($value) {
    $this -> priority = $value;
    return $this;
  }
  
  public function startTimeZone ($value) {
    $this -> startTimeZone = $value;
    return $this;
  }
  
  public function endTimeZone ($value) {
    $this -> endTimeZone = $value;
    return $this;
  }
  
}
  ?>