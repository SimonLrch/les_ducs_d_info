<?php
namespace EJ;
class HeatMapLegend extends \EJ\Widget {
    
  public function width($value) {
    $this->model["width"] = $value;
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
  
  public function showLabel($value) {
    $this->model["showLabel"] = $value;
    return $this;
  }
  
  public function colorMappingCollection($value) {
    $this->model["colorMappingCollection"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function legendMode($value) {
    $this->model["legendMode"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejHeatMapLegend";
  }
  
    
}
  ?>