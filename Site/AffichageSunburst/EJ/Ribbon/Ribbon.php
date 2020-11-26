<?php
namespace EJ;
class Ribbon extends \EJ\Widget {
    
  public function allowResizing($value) {
    $this->model["allowResizing"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function buttonDefaults($value) {
    $this->model["buttonDefaults"] = $value;
    return $this;
  }
  
  public function showQAT($value) {
    $this->model["showQAT"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function collapsePinSettings($value) {
    $this->model["collapsePinSettings"] = $value;
    return $this;
  }
  
  public function enableOnDemand($value) {
    $this->model["enableOnDemand"] = $value;
    return $this;
  }
  
  public function collapsible($value) {
    $this->model["collapsible"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function expandPinSettings($value) {
    $this->model["expandPinSettings"] = $value;
    return $this;
  }
  
  public function applicationTab($value) {
    $this->model["applicationTab"] = $value;
    return $this;
  }
  
  public function contextualTabs($value) {
    $this->model["contextualTabs"] = $value;
    return $this;
  }
  
  public function disabledItemIndex($value) {
    $this->model["disabledItemIndex"] = $value;
    return $this;
  }
  
  public function enabledItemIndex($value) {
    $this->model["enabledItemIndex"] = $value;
    return $this;
  }
  
  public function selectedItemIndex($value) {
    $this->model["selectedItemIndex"] = $value;
    return $this;
  }
  
  public function tabs($value) {
    $this->model["tabs"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function beforeTabRemove($value) {
    $this->model["beforeTabRemove"] = $value;
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
  
  public function groupClick($value) {
    $this->model["groupClick"] = $value;
    return $this;
  }
  
  public function groupExpand($value) {
    $this->model["groupExpand"] = $value;
    return $this;
  }
  
  public function galleryItemClick($value) {
    $this->model["galleryItemClick"] = $value;
    return $this;
  }
  
  public function backstageItemClick($value) {
    $this->model["backstageItemClick"] = $value;
    return $this;
  }
  
  public function collapse($value) {
    $this->model["collapse"] = $value;
    return $this;
  }
  
  public function expand($value) {
    $this->model["expand"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function tabAdd($value) {
    $this->model["tabAdd"] = $value;
    return $this;
  }
  
  public function tabClick($value) {
    $this->model["tabClick"] = $value;
    return $this;
  }
  
  public function tabCreate($value) {
    $this->model["tabCreate"] = $value;
    return $this;
  }
  
  public function tabRemove($value) {
    $this->model["tabRemove"] = $value;
    return $this;
  }
  
  public function tabSelect($value) {
    $this->model["tabSelect"] = $value;
    return $this;
  }
  
  public function toggleButtonClick($value) {
    $this->model["toggleButtonClick"] = $value;
    return $this;
  }
  
  public function qatMenuItemClick($value) {
    $this->model["qatMenuItemClick"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejRibbon";
  }
  
    
}
  ?>