<?php
namespace EJ\BulletGraph;
class TooltipSetting {
    
  public function captionTemplate ($value) {
    $this -> captionTemplate = $value;
    return $this;
  }
  
  public function enableCaptionTooltip ($value) {
    $this -> enableCaptionTooltip = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
}
  ?>