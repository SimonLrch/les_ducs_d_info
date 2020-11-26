<?php
namespace EJ;
class Sparkline extends \EJ\Widget {
    
  public function background($value) {
    $this->model["background"] = $value;
    return $this;
  }
  
  public function fill($value) {
    $this->model["fill"] = $value;
    return $this;
  }
  
  public function stroke($value) {
    $this->model["stroke"] = $value;
    return $this;
  }
  
  public function border($value) {
    $this->model["border"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function opacity($value) {
    $this->model["opacity"] = $value;
    return $this;
  }
  
  public function highPointColor($value) {
    $this->model["highPointColor"] = $value;
    return $this;
  }
  
  public function lowPointColor($value) {
    $this->model["lowPointColor"] = $value;
    return $this;
  }
  
  public function startPointColor($value) {
    $this->model["startPointColor"] = $value;
    return $this;
  }
  
  public function endPointColor($value) {
    $this->model["endPointColor"] = $value;
    return $this;
  }
  
  public function negativePointColor($value) {
    $this->model["negativePointColor"] = $value;
    return $this;
  }
  
  public function rangeBandSettings($value) {
    $this->model["rangeBandSettings"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function palette($value) {
    $this->model["palette"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function enableCanvasRendering($value) {
    $this->model["enableCanvasRendering"] = $value;
    return $this;
  }
  
  public function enableGroupSeparator($value) {
    $this->model["enableGroupSeparator"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function xName($value) {
    $this->model["xName"] = $value;
    return $this;
  }
  
  public function yName($value) {
    $this->model["yName"] = $value;
    return $this;
  }
  
  public function padding($value) {
    $this->model["padding"] = $value;
    return $this;
  }
  
  public function type($value) {
    $this->model["type"] = $value;
    return $this;
  }
  
  public function theme($value) {
    $this->model["theme"] = $value;
    return $this;
  }
  
  public function tooltip($value) {
    $this->model["tooltip"] = $value;
    return $this;
  }
  
  public function markerSettings($value) {
    $this->model["markerSettings"] = $value;
    return $this;
  }
  
  public function size($value) {
    $this->model["size"] = $value;
    return $this;
  }
  
  public function axisLineSettings($value) {
    $this->model["axisLineSettings"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function loaded($value) {
    $this->model["loaded"] = $value;
    return $this;
  }
  
  public function tooltipInitialize($value) {
    $this->model["tooltipInitialize"] = $value;
    return $this;
  }
  
  public function seriesRendering($value) {
    $this->model["seriesRendering"] = $value;
    return $this;
  }
  
  public function pointRegionMouseMove($value) {
    $this->model["pointRegionMouseMove"] = $value;
    return $this;
  }
  
  public function pointRegionMouseClick($value) {
    $this->model["pointRegionMouseClick"] = $value;
    return $this;
  }
  
  public function sparklineMouseMove($value) {
    $this->model["sparklineMouseMove"] = $value;
    return $this;
  }
  
  public function sparklineMouseLeave($value) {
    $this->model["sparklineMouseLeave"] = $value;
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
    return "ejSparkline";
  }
  
    
}
  ?>