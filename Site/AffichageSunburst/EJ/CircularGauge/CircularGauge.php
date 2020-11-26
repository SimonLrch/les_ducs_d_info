<?php
namespace EJ;
class CircularGauge extends \EJ\Widget {
    
  public function animationSpeed($value) {
    $this->model["animationSpeed"] = $value;
    return $this;
  }
  
  public function backgroundColor($value) {
    $this->model["backgroundColor"] = $value;
    return $this;
  }
  
  public function distanceFromCorner($value) {
    $this->model["distanceFromCorner"] = $value;
    return $this;
  }
  
  public function rangeZOrder($value) {
    $this->model["rangeZOrder"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
    return $this;
  }
  
  public function enableGroupSeparator($value) {
    $this->model["enableGroupSeparator"] = $value;
    return $this;
  }
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function exportSettings($value) {
    $this->model["exportSettings"] = $value;
    return $this;
  }
  
  public function frame($value) {
    $this->model["frame"] = $value;
    return $this;
  }
  
  public function gaugePosition($value) {
    $this->model["gaugePosition"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function interiorGradient($value) {
    $this->model["interiorGradient"] = $value;
    return $this;
  }
  
  public function isRadialGradient($value) {
    $this->model["isRadialGradient"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function maximum($value) {
    $this->model["maximum"] = $value;
    return $this;
  }
  
  public function minimum($value) {
    $this->model["minimum"] = $value;
    return $this;
  }
  
  public function outerCustomLabelPosition($value) {
    $this->model["outerCustomLabelPosition"] = $value;
    return $this;
  }
  
  public function radius($value) {
    $this->model["radius"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function scales($value) {
    $this->model["scales"] = $value;
    return $this;
  }
  
  public function theme($value) {
    $this->model["theme"] = $value;
    return $this;
  }
  
  public function legend($value) {
    $this->model["legend"] = $value;
    return $this;
  }
  
  public function tooltip($value) {
    $this->model["tooltip"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function legendItemRender($value) {
    $this->model["legendItemRender"] = $value;
    return $this;
  }
  
  public function legendItemClick($value) {
    $this->model["legendItemClick"] = $value;
    return $this;
  }
  
  public function rangeMouseMove($value) {
    $this->model["rangeMouseMove"] = $value;
    return $this;
  }
  
  public function drawCustomLabel($value) {
    $this->model["drawCustomLabel"] = $value;
    return $this;
  }
  
  public function drawIndicators($value) {
    $this->model["drawIndicators"] = $value;
    return $this;
  }
  
  public function drawLabels($value) {
    $this->model["drawLabels"] = $value;
    return $this;
  }
  
  public function drawPointerCap($value) {
    $this->model["drawPointerCap"] = $value;
    return $this;
  }
  
  public function drawPointers($value) {
    $this->model["drawPointers"] = $value;
    return $this;
  }
  
  public function drawRange($value) {
    $this->model["drawRange"] = $value;
    return $this;
  }
  
  public function drawTicks($value) {
    $this->model["drawTicks"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function mouseClick($value) {
    $this->model["mouseClick"] = $value;
    return $this;
  }
  
  public function mouseClickMove($value) {
    $this->model["mouseClickMove"] = $value;
    return $this;
  }
  
  public function mouseClickUp($value) {
    $this->model["mouseClickUp"] = $value;
    return $this;
  }
  
  public function renderComplete($value) {
    $this->model["renderComplete"] = $value;
    return $this;
  }
  
  public function doubleClick($value) {
    $this->model["doubleClick"] = $value;
    return $this;
  }
  
  public function rightClick($value) {
    $this->model["rightClick"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejCircularGauge";
  }
  
    
}
  ?>