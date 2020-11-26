<?php
namespace EJ;
class SymbolPalette extends \EJ\Widget {
    
  public function allowDrag($value) {
    $this->model["allowDrag"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function defaultSettings($value) {
    $this->model["defaultSettings"] = $value;
    return $this;
  }
  
  public function diagramId($value) {
    $this->model["diagramId"] = $value;
    return $this;
  }
  
  public function headerHeight($value) {
    $this->model["headerHeight"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function paletteItemHeight($value) {
    $this->model["paletteItemHeight"] = $value;
    return $this;
  }
  
  public function paletteItemWidth($value) {
    $this->model["paletteItemWidth"] = $value;
    return $this;
  }
  
  public function palettes($value) {
    $this->model["palettes"] = $value;
    return $this;
  }
  
  public function previewHeight($value) {
    $this->model["previewHeight"] = $value;
    return $this;
  }
  
  public function previewOffset($value) {
    $this->model["previewOffset"] = $value;
    return $this;
  }
  
  public function previewWidth($value) {
    $this->model["previewWidth"] = $value;
    return $this;
  }
  
  public function showPaletteItemText($value) {
    $this->model["showPaletteItemText"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function selectionChange($value) {
    $this->model["selectionChange"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejSymbolPalette";
  }
  
    
}
  ?>