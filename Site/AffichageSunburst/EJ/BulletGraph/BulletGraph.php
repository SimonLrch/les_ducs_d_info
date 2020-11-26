<?php
namespace EJ;
class BulletGraph extends \EJ\Widget {
    
  public function applyRangeStrokeToLabels($value) {
    $this->model["applyRangeStrokeToLabels"] = $value;
    return $this;
  }
  
  public function applyRangeStrokeToTicks($value) {
    $this->model["applyRangeStrokeToTicks"] = $value;
    return $this;
  }
  
  public function captionSettings($value) {
    $this->model["captionSettings"] = $value;
    return $this;
  }
  
  public function comparativeMeasureValue($value) {
    $this->model["comparativeMeasureValue"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
    return $this;
  }
  
  public function enableResizing($value) {
    $this->model["enableResizing"] = $value;
    return $this;
  }
  
  public function flowDirection($value) {
    $this->model["flowDirection"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function enableGroupSeparator($value) {
    $this->model["enableGroupSeparator"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function qualitativeRanges($value) {
    $this->model["qualitativeRanges"] = $value;
    return $this;
  }
  
  public function qualitativeRangeSize($value) {
    $this->model["qualitativeRangeSize"] = $value;
    return $this;
  }
  
  public function quantitativeScaleLength($value) {
    $this->model["quantitativeScaleLength"] = $value;
    return $this;
  }
  
  public function quantitativeScaleSettings($value) {
    $this->model["quantitativeScaleSettings"] = $value;
    return $this;
  }
  
  public function theme($value) {
    $this->model["theme"] = $value;
    return $this;
  }
  
  public function tooltipSettings($value) {
    $this->model["tooltipSettings"] = $value;
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
  
  public function drawCaption($value) {
    $this->model["drawCaption"] = $value;
    return $this;
  }
  
  public function drawCategory($value) {
    $this->model["drawCategory"] = $value;
    return $this;
  }
  
  public function drawComparativeMeasureSymbol($value) {
    $this->model["drawComparativeMeasureSymbol"] = $value;
    return $this;
  }
  
  public function drawFeatureMeasureBar($value) {
    $this->model["drawFeatureMeasureBar"] = $value;
    return $this;
  }
  
  public function drawIndicator($value) {
    $this->model["drawIndicator"] = $value;
    return $this;
  }
  
  public function drawLabels($value) {
    $this->model["drawLabels"] = $value;
    return $this;
  }
  
  public function drawTicks($value) {
    $this->model["drawTicks"] = $value;
    return $this;
  }
  
  public function drawQualitativeRanges($value) {
    $this->model["drawQualitativeRanges"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function Click($value) {
    $this->model["Click"] = $value;
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
    return "ejBulletGraph";
  }
  
    
}
  ?>