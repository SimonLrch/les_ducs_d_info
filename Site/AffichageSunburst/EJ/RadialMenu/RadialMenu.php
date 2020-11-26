<?php
namespace EJ;
class RadialMenu extends \EJ\Widget {
    
  public function autoOpen($value) {
    $this->model["autoOpen"] = $value;
    return $this;
  }
  
  public function backImageClass($value) {
    $this->model["backImageClass"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
    return $this;
  }
  
  public function imageClass($value) {
    $this->model["imageClass"] = $value;
    return $this;
  }
  
  public function items($value) {
    $this->model["items"] = $value;
    return $this;
  }
  
  public function radius($value) {
    $this->model["radius"] = $value;
    return $this;
  }
  
  public function targetElementId($value) {
    $this->model["targetElementId"] = $value;
    return $this;
  }
  
  public function position($value) {
    $this->model["position"] = $value;
    return $this;
  }
  
  public function click($value) {
    $this->model["click"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function close($value) {
    $this->model["close"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejRadialMenu";
  }
  
    
}
  ?>