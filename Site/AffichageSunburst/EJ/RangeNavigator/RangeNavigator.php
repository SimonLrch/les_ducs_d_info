<?php
namespace EJ;
class RangeNavigator extends \EJ\Widget {
    
  public function allowSnapping($value) {
    $this->model["allowSnapping"] = $value;
    return $this;
  }
  
  public function allowNextValue($value) {
    $this->model["allowNextValue"] = $value;
    return $this;
  }
  
  public function border($value) {
    $this->model["border"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function series($value) {
    $this->model["series"] = $value;
    return $this;
  }
  
  public function seriesSettings($value) {
    $this->model["seriesSettings"] = $value;
    return $this;
  }
  
  public function enableDeferredUpdate($value) {
    $this->model["enableDeferredUpdate"] = $value;
    return $this;
  }
  
  public function enableScrollbar($value) {
    $this->model["enableScrollbar"] = $value;
    return $this;
  }
  
  public function enableAutoResizing($value) {
    $this->model["enableAutoResizing"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function labelSettings($value) {
    $this->model["labelSettings"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function navigatorStyleSettings($value) {
    $this->model["navigatorStyleSettings"] = $value;
    return $this;
  }
  
  public function padding($value) {
    $this->model["padding"] = $value;
    return $this;
  }
  
  public function rangePadding($value) {
    $this->model["rangePadding"] = $value;
    return $this;
  }
  
  public function rangeSettings($value) {
    $this->model["rangeSettings"] = $value;
    return $this;
  }
  
  public function selectedData($value) {
    $this->model["selectedData"] = $value;
    return $this;
  }
  
  public function selectedRangeSettings($value) {
    $this->model["selectedRangeSettings"] = $value;
    return $this;
  }
  
  public function scrollRangeSettings($value) {
    $this->model["scrollRangeSettings"] = $value;
    return $this;
  }
  
  public function sizeSettings($value) {
    $this->model["sizeSettings"] = $value;
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
  
  public function valueAxisSettings($value) {
    $this->model["valueAxisSettings"] = $value;
    return $this;
  }
  
  public function valueType($value) {
    $this->model["valueType"] = $value;
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
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function loaded($value) {
    $this->model["loaded"] = $value;
    return $this;
  }
  
  public function rangeChanged($value) {
    $this->model["rangeChanged"] = $value;
    return $this;
  }
  
  public function scrollChanged($value) {
    $this->model["scrollChanged"] = $value;
    return $this;
  }
  
  public function scrollStart($value) {
    $this->model["scrollStart"] = $value;
    return $this;
  }
  
  public function selectedRangeStart($value) {
    $this->model["selectedRangeStart"] = $value;
    return $this;
  }
  
  public function selectedRangeEnd($value) {
    $this->model["selectedRangeEnd"] = $value;
    return $this;
  }
  
  public function scrollEnd($value) {
    $this->model["scrollEnd"] = $value;
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
    return "ejRangeNavigator";
  }
  
    
}
  ?>