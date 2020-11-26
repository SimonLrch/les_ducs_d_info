<?php
namespace EJ;
class RadialSlider extends \EJ\Widget {
    
  public function autoOpen($value) {
    $this->model["autoOpen"] = $value;
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
  
  public function enableRoundOff($value) {
    $this->model["enableRoundOff"] = $value;
    return $this;
  }
  
  public function endAngle($value) {
    $this->model["endAngle"] = $value;
    return $this;
  }
  
  public function inline($value) {
    $this->model["inline"] = $value;
    return $this;
  }
  
  public function innerCircleImageClass($value) {
    $this->model["innerCircleImageClass"] = $value;
    return $this;
  }
  
  public function innerCircleImageUrl($value) {
    $this->model["innerCircleImageUrl"] = $value;
    return $this;
  }
  
  public function labelSpace($value) {
    $this->model["labelSpace"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function radius($value) {
    $this->model["radius"] = $value;
    return $this;
  }
  
  public function showInnerCircle($value) {
    $this->model["showInnerCircle"] = $value;
    return $this;
  }
  
  public function startAngle($value) {
    $this->model["startAngle"] = $value;
    return $this;
  }
  
  public function strokeWidth($value) {
    $this->model["strokeWidth"] = $value;
    return $this;
  }
  
  public function ticks($value) {
    $this->model["ticks"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function change($value) {
    $this->model["change"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function mouseover($value) {
    $this->model["mouseover"] = $value;
    return $this;
  }
  
  public function slide($value) {
    $this->model["slide"] = $value;
    return $this;
  }
  
  public function start($value) {
    $this->model["start"] = $value;
    return $this;
  }
  
  public function stop($value) {
    $this->model["stop"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejRadialSlider";
  }
  
    
}
  ?>