<?php
namespace EJ;
class Map extends \EJ\Widget {
    
  public function background($value) {
    $this->model["background"] = $value;
    return $this;
  }
  
  public function baseMapIndex($value) {
    $this->model["baseMapIndex"] = $value;
    return $this;
  }
  
  public function centerPosition($value) {
    $this->model["centerPosition"] = $value;
    return $this;
  }
  
  public function draggingOnSelection($value) {
    $this->model["draggingOnSelection"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableLayerChangeAnimation($value) {
    $this->model["enableLayerChangeAnimation"] = $value;
    return $this;
  }
  
  public function enablePan($value) {
    $this->model["enablePan"] = $value;
    return $this;
  }
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function zoomSettings($value) {
    $this->model["zoomSettings"] = $value;
    return $this;
  }
  
  public function navigationControl($value) {
    $this->model["navigationControl"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function layers($value) {
    $this->model["layers"] = $value;
    return $this;
  }
  
  public function markerSelected($value) {
    $this->model["markerSelected"] = $value;
    return $this;
  }
  
  public function legendItemRendering($value) {
    $this->model["legendItemRendering"] = $value;
    return $this;
  }
  
  public function bubbleRendering($value) {
    $this->model["bubbleRendering"] = $value;
    return $this;
  }
  
  public function shapeRendering($value) {
    $this->model["shapeRendering"] = $value;
    return $this;
  }
  
  public function mouseleave($value) {
    $this->model["mouseleave"] = $value;
    return $this;
  }
  
  public function mouseover($value) {
    $this->model["mouseover"] = $value;
    return $this;
  }
  
  public function onRenderComplete($value) {
    $this->model["onRenderComplete"] = $value;
    return $this;
  }
  
  public function panned($value) {
    $this->model["panned"] = $value;
    return $this;
  }
  
  public function shapeSelected($value) {
    $this->model["shapeSelected"] = $value;
    return $this;
  }
  
  public function zoomedIn($value) {
    $this->model["zoomedIn"] = $value;
    return $this;
  }
  
  public function zoomedOut($value) {
    $this->model["zoomedOut"] = $value;
    return $this;
  }
  
  public function Click($value) {
    $this->model["Click"] = $value;
    return $this;
  }
  
  public function legendItemClick($value) {
    $this->model["legendItemClick"] = $value;
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
  
  public function onLoad($value) {
    $this->model["onLoad"] = $value;
    return $this;
  }
  
  public function markerEnter($value) {
    $this->model["markerEnter"] = $value;
    return $this;
  }
  
  public function markerLeave($value) {
    $this->model["markerLeave"] = $value;
    return $this;
  }
  
  public function refreshed($value) {
    $this->model["refreshed"] = $value;
    return $this;
  }
  
  public function displayTextRendering($value) {
    $this->model["displayTextRendering"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejMap";
  }
  
    
}
  ?>