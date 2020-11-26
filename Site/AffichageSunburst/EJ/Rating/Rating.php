<?php
namespace EJ;
class Rating extends \EJ\Widget {
    
  public function allowReset($value) {
    $this->model["allowReset"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
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
  
  public function precision($value) {
    $this->model["precision"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function shapeHeight($value) {
    $this->model["shapeHeight"] = $value;
    return $this;
  }
  
  public function shapeWidth($value) {
    $this->model["shapeWidth"] = $value;
    return $this;
  }
  
  public function showTooltip($value) {
    $this->model["showTooltip"] = $value;
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
  
  public function change($value) {
    $this->model["change"] = $value;
    return $this;
  }
  
  public function click($value) {
    $this->model["click"] = $value;
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
  
  public function mouseout($value) {
    $this->model["mouseout"] = $value;
    return $this;
  }
  
  public function mousemove($value) {
    $this->model["mousemove"] = $value;
    return $this;
  }
  
  public function mouseover($value) {
    $this->model["mouseover"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('input') ;
  }
  
  protected function PluginName() {
    return "ejRating";
  }
  
    
}
  ?>