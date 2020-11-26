<?php
namespace EJ;
class Slider extends \EJ\Widget {
    
  public function allowMouseWheel($value) {
    $this->model["allowMouseWheel"] = $value;
    return $this;
  }
  
  public function animationSpeed($value) {
    $this->model["animationSpeed"] = $value;
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
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enablePersistence($value) {
    $this->model["enablePersistence"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function incrementStep($value) {
    $this->model["incrementStep"] = $value;
    return $this;
  }
  
  public function largeStep($value) {
    $this->model["largeStep"] = $value;
    return $this;
  }
  
  public function maxValue($value) {
    $this->model["maxValue"] = $value;
    return $this;
  }
  
  public function minValue($value) {
    $this->model["minValue"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function showButtons($value) {
    $this->model["showButtons"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function showScale($value) {
    $this->model["showScale"] = $value;
    return $this;
  }
  
  public function showSmallTicks($value) {
    $this->model["showSmallTicks"] = $value;
    return $this;
  }
  
  public function showTooltip($value) {
    $this->model["showTooltip"] = $value;
    return $this;
  }
  
  public function sliderType($value) {
    $this->model["sliderType"] = $value;
    return $this;
  }
  
  public function smallStep($value) {
    $this->model["smallStep"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function values($value) {
    $this->model["values"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
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
  
  public function destroy($value) {
    $this->model["destroy"] = $value;
    return $this;
  }
  
  public function renderingTicks($value) {
    $this->model["renderingTicks"] = $value;
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
  
  public function tooltipChange($value) {
    $this->model["tooltipChange"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejSlider";
  }
  
    
}
  ?>