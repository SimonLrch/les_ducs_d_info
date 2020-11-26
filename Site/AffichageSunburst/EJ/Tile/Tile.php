<?php
namespace EJ;
class Tile extends \EJ\Widget {
    
  public function badge($value) {
    $this->model["badge"] = $value;
    return $this;
  }
  
  public function caption($value) {
    $this->model["caption"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
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
  
  public function imageClass($value) {
    $this->model["imageClass"] = $value;
    return $this;
  }
  
  public function imagePosition($value) {
    $this->model["imagePosition"] = $value;
    return $this;
  }
  
  public function imageTemplateId($value) {
    $this->model["imageTemplateId"] = $value;
    return $this;
  }
  
  public function imageUrl($value) {
    $this->model["imageUrl"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function liveTile($value) {
    $this->model["liveTile"] = $value;
    return $this;
  }
  
  public function tileSize($value) {
    $this->model["tileSize"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function allowSelection($value) {
    $this->model["allowSelection"] = $value;
    return $this;
  }
  
  public function backgroundColor($value) {
    $this->model["backgroundColor"] = $value;
    return $this;
  }
  
  public function mouseDown($value) {
    $this->model["mouseDown"] = $value;
    return $this;
  }
  
  public function mouseUp($value) {
    $this->model["mouseUp"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejTile";
  }
  
    
}
  ?>