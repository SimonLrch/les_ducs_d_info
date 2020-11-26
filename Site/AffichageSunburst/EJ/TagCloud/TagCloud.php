<?php
namespace EJ;
class TagCloud extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function format($value) {
    $this->model["format"] = $value;
    return $this;
  }
  
  public function maxFontSize($value) {
    $this->model["maxFontSize"] = $value;
    return $this;
  }
  
  public function minFontSize($value) {
    $this->model["minFontSize"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function showTitle($value) {
    $this->model["showTitle"] = $value;
    return $this;
  }
  
  public function titleImage($value) {
    $this->model["titleImage"] = $value;
    return $this;
  }
  
  public function titleText($value) {
    $this->model["titleText"] = $value;
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
  
  public function mouseover($value) {
    $this->model["mouseover"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejTagCloud";
  }
  
    
}
  ?>