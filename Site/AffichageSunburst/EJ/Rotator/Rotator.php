<?php
namespace EJ;
class Rotator extends \EJ\Widget {
    
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function animationSpeed($value) {
    $this->model["animationSpeed"] = $value;
    return $this;
  }
  
  public function animationType($value) {
    $this->model["animationType"] = $value;
    return $this;
  }
  
  public function circularMode($value) {
    $this->model["circularMode"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function delay($value) {
    $this->model["delay"] = $value;
    return $this;
  }
  
  public function displayItemsCount($value) {
    $this->model["displayItemsCount"] = $value;
    return $this;
  }
  
  public function enableAutoPlay($value) {
    $this->model["enableAutoPlay"] = $value;
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
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function frameSpace($value) {
    $this->model["frameSpace"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function navigateSteps($value) {
    $this->model["navigateSteps"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function pagerPosition($value) {
    $this->model["pagerPosition"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function showCaption($value) {
    $this->model["showCaption"] = $value;
    return $this;
  }
  
  public function showNavigateButton($value) {
    $this->model["showNavigateButton"] = $value;
    return $this;
  }
  
  public function showPager($value) {
    $this->model["showPager"] = $value;
    return $this;
  }
  
  public function showPlayButton($value) {
    $this->model["showPlayButton"] = $value;
    return $this;
  }
  
  public function showThumbnail($value) {
    $this->model["showThumbnail"] = $value;
    return $this;
  }
  
  public function slideHeight($value) {
    $this->model["slideHeight"] = $value;
    return $this;
  }
  
  public function slideWidth($value) {
    $this->model["slideWidth"] = $value;
    return $this;
  }
  
  public function startIndex($value) {
    $this->model["startIndex"] = $value;
    return $this;
  }
  
  public function stopOnHover($value) {
    $this->model["stopOnHover"] = $value;
    return $this;
  }
  
  public function template($value) {
    $this->model["template"] = $value;
    return $this;
  }
  
  public function templateId($value) {
    $this->model["templateId"] = $value;
    return $this;
  }
  
  public function thumbnailSourceID($value) {
    $this->model["thumbnailSourceID"] = $value;
    return $this;
  }
  
  public function change($value) {
    $this->model["change"] = $value;
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
  
  public function pagerClick($value) {
    $this->model["pagerClick"] = $value;
    return $this;
  }
  
  public function start($value) {
    $this->model["start"] = $value;
    return $this;
  }
  
  public function stop($value) {
    $this->model["stop"] = $value;
    return $this;
  }
  
  public function thumbItemClick($value) {
    $this->model["thumbItemClick"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('ul') ;
  }
  
  protected function PluginName() {
    return "ejRotator";
  }
  
    
}
  ?>