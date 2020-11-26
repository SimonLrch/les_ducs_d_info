<?php
namespace EJ;
class HeatMap extends \EJ\Widget {
    
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function id($value) {
    $this->model["id"] = $value;
    return $this;
  }
  
  public function showTooltip($value) {
    $this->model["showTooltip"] = $value;
    return $this;
  }
  
  public function tooltipSettings($value) {
    $this->model["tooltipSettings"] = $value;
    return $this;
  }
  
  public function itemsSource($value) {
    $this->model["itemsSource"] = $value;
    return $this;
  }
  
  public function heatMapCell($value) {
    $this->model["heatMapCell"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function enableVirtualization($value) {
    $this->model["enableVirtualization"] = $value;
    return $this;
  }
  
  public function defaultColumnStyle($value) {
    $this->model["defaultColumnStyle"] = $value;
    return $this;
  }
  
  public function legendCollection($value) {
    $this->model["legendCollection"] = $value;
    return $this;
  }
  
  public function itemsMapping($value) {
    $this->model["itemsMapping"] = $value;
    return $this;
  }
  
  public function colorMappingCollection($value) {
    $this->model["colorMappingCollection"] = $value;
    return $this;
  }
  
  public function cellMouseOver($value) {
    $this->model["cellMouseOver"] = $value;
    return $this;
  }
  
  public function cellMouseEnter($value) {
    $this->model["cellMouseEnter"] = $value;
    return $this;
  }
  
  public function cellMouseLeave($value) {
    $this->model["cellMouseLeave"] = $value;
    return $this;
  }
  
  public function cellSelected($value) {
    $this->model["cellSelected"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejHeatMap";
  }
  
    
}
  ?>