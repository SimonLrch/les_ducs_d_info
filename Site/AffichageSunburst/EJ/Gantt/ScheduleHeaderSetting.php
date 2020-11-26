<?php
namespace EJ\Gantt;
class ScheduleHeaderSetting {
    
  public function dayHeaderFormat ($value) {
    $this -> dayHeaderFormat = $value;
    return $this;
  }
  
  public function hourHeaderFormat ($value) {
    $this -> hourHeaderFormat = $value;
    return $this;
  }
  
  public function minutesPerInterval ($value) {
    $this -> minutesPerInterval = $value;
    return $this;
  }
  
  public function monthHeaderFormat ($value) {
    $this -> monthHeaderFormat = $value;
    return $this;
  }
  
  public function scheduleHeaderType ($value) {
    $this -> scheduleHeaderType = $value;
    return $this;
  }
  
  public function timescaleStartDateMode ($value) {
    $this -> timescaleStartDateMode = $value;
    return $this;
  }
  
  public function weekendBackground ($value) {
    $this -> weekendBackground = $value;
    return $this;
  }
  
  public function weekHeaderFormat ($value) {
    $this -> weekHeaderFormat = $value;
    return $this;
  }
  
  public function yearHeaderFormat ($value) {
    $this -> yearHeaderFormat = $value;
    return $this;
  }
  
  public function timescaleUnitSize ($value) {
    $this -> timescaleUnitSize = $value;
    return $this;
  }
  
  public function weekStartDay ($value) {
    $this -> weekStartDay = $value;
    return $this;
  }
  
  public function updateTimescaleView ($value) {
    $this -> updateTimescaleView = $value;
    return $this;
  }
  
}
  ?>