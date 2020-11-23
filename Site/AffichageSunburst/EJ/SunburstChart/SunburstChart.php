<?php
namespace EJ;
class SunburstChart extends \EJ\Widget {
    
  public function background($value) {
    $this->model["background"] = $value;
    return $this;
  }
  
  public function valueMemberPath($value) {
    $this->model["valueMemberPath"] = $value;
    return $this;
  }
  
  public function border($value) {
    $this->model["border"] = $value;
    return $this;
  }
  
  public function segmentBorder($value) {
    $this->model["segmentBorder"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function palette($value) {
    $this->model["palette"] = $value;
    return $this;
  }
  
  public function parentNode($value) {
    $this->model["parentNode"] = $value;
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
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function size($value) {
    $this->model["size"] = $value;
    return $this;
  }
  
  public function visible($value) {
    $this->model["visible"] = $value;
    return $this;
  }
  
  public function tooltip($value) {
    $this->model["tooltip"] = $value;
    return $this;
  }
  
  public function points($value) {
    $this->model["points"] = $value;
    return $this;
  }
  
  public function startAngle($value) {
    $this->model["startAngle"] = $value;
    return $this;
  }
  
  public function endAngle($value) {
    $this->model["endAngle"] = $value;
    return $this;
  }
  
  public function radius($value) {
    $this->model["radius"] = $value;
    return $this;
  }
  
  public function innerRadius($value) {
    $this->model["innerRadius"] = $value;
    return $this;
  }
  
  public function dataLabelSettings($value) {
    $this->model["dataLabelSettings"] = $value;
    return $this;
  }
  
  public function title($value) {
    $this->model["title"] = $value;
    return $this;
  }
  
  public function highlightSettings($value) {
    $this->model["highlightSettings"] = $value;
    return $this;
  }
  
  public function selectionSettings($value) {
    $this->model["selectionSettings"] = $value;
    return $this;
  }
  
  public function levels($value) {
    $this->model["levels"] = $value;
    return $this;
  }
  
  public function legend($value) {
    $this->model["legend"] = $value;
    return $this;
  }
  
  public function theme($value) {
    $this->model["theme"] = $value;
    return $this;
  }
  
  public function margin($value) {
    $this->model["margin"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
    return $this;
  }
  
  public function opacity($value) {
    $this->model["opacity"] = $value;
    return $this;
  }
  
  public function zoomSettings($value) {
    $this->model["zoomSettings"] = $value;
    return $this;
  }
  
  public function animationType($value) {
    $this->model["animationType"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function preRender($value) {
    $this->model["preRender"] = $value;
    return $this;
  }
  
  public function loaded($value) {
    $this->model["loaded"] = $value;
    return $this;
  }
  
  public function dataLabelRendering($value) {
    $this->model["dataLabelRendering"] = $value;
    return $this;
  }
  
  public function segmentRendering($value) {
    $this->model["segmentRendering"] = $value;
    return $this;
  }
  
  public function titleRendering($value) {
    $this->model["titleRendering"] = $value;
    return $this;
  }
  
  public function tooltipInitialize($value) {
    $this->model["tooltipInitialize"] = $value;
    return $this;
  }
  
  public function pointRegionClick($value) {
    $this->model["pointRegionClick"] = $value;
    return $this;
  }
  
  public function pointRegionMouseMove($value) {
    $this->model["pointRegionMouseMove"] = $value;
    return $this;
  }
  
  public function drillDownClick($value) {
    $this->model["drillDownClick"] = $value;
    return $this;
  }
  
  public function drillDownBack($value) {
    $this->model["drillDownBack"] = $value;
    return $this;
  }
  
  public function drillDownReset($value) {
    $this->model["drillDownReset"] = $value;
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
    return "ejSunburstChart";
  }
  
    
}
  ?>