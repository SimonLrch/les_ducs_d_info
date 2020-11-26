<?php
namespace EJ;
class Tooltip extends \EJ\Widget {
    
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function animation($value) {
    $this->model["animation"] = $value;
    return $this;
  }
  
  public function associate($value) {
    $this->model["associate"] = $value;
    return $this;
  }
  
  public function autoCloseTimeout($value) {
    $this->model["autoCloseTimeout"] = $value;
    return $this;
  }
  
  public function closeMode($value) {
    $this->model["closeMode"] = $value;
    return $this;
  }
  
  public function collision($value) {
    $this->model["collision"] = $value;
    return $this;
  }
  
  public function containment($value) {
    $this->model["containment"] = $value;
    return $this;
  }
  
  public function content($value) {
    $this->model["content"] = $value;
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
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function isBalloon($value) {
    $this->model["isBalloon"] = $value;
    return $this;
  }
  
  public function position($value) {
    $this->model["position"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function showShadow($value) {
    $this->model["showShadow"] = $value;
    return $this;
  }
  
  public function target($value) {
    $this->model["target"] = $value;
    return $this;
  }
  
  public function tip($value) {
    $this->model["tip"] = $value;
    return $this;
  }
  
  public function title($value) {
    $this->model["title"] = $value;
    return $this;
  }
  
  public function trigger($value) {
    $this->model["trigger"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function beforeClose($value) {
    $this->model["beforeClose"] = $value;
    return $this;
  }
  
  public function beforeOpen($value) {
    $this->model["beforeOpen"] = $value;
    return $this;
  }
  
  public function click($value) {
    $this->model["click"] = $value;
    return $this;
  }
  
  public function close($value) {
    $this->model["close"] = $value;
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
  
  public function hover($value) {
    $this->model["hover"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function tracking($value) {
    $this->model["tracking"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejTooltip";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
    
}
  ?>