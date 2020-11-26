<?php
namespace EJ\RTE;
class PasteCleanupSetting {
    
  public function listConversion ($value) {
    $this -> listConversion = $value;
    return $this;
  }
  
  public function cleanCSS ($value) {
    $this -> cleanCSS = $value;
    return $this;
  }
  
  public function removeStyles ($value) {
    $this -> removeStyles = $value;
    return $this;
  }
  
  public function cleanElements ($value) {
    $this -> cleanElements = $value;
    return $this;
  }
  
}
  ?>