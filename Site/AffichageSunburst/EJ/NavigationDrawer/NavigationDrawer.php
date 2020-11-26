<?php
namespace EJ;
class NavigationDrawer extends \EJ\Widget {
    
  public function ajaxSettings($value) {
    $this->model["ajaxSettings"] = $value;
    return $this;
  }
  
  public function contentId($value) {
    $this->model["contentId"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function direction($value) {
    $this->model["direction"] = $value;
    return $this;
  }
  
  public function enableListView($value) {
    $this->model["enableListView"] = $value;
    return $this;
  }
  
  public function items($value) {
    $this->model["items"] = $value;
    return $this;
  }
  
  public function listViewSettings($value) {
    $this->model["listViewSettings"] = $value;
    return $this;
  }
  
  public function position($value) {
    $this->model["position"] = $value;
    return $this;
  }
  
  public function targetId($value) {
    $this->model["targetId"] = $value;
    return $this;
  }
  
  public function type($value) {
    $this->model["type"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function isPaneOpen($value) {
    $this->model["isPaneOpen"] = $value;
    return $this;
  }
  
  public function ajaxComplete($value) {
    $this->model["ajaxComplete"] = $value;
    return $this;
  }
  
  public function ajaxError($value) {
    $this->model["ajaxError"] = $value;
    return $this;
  }
  
  public function ajaxSuccess($value) {
    $this->model["ajaxSuccess"] = $value;
    return $this;
  }
  
  public function beforeClose($value) {
    $this->model["beforeClose"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function swipe($value) {
    $this->model["swipe"] = $value;
    return $this;
  }
  
    
  public function templateStart() {
    ob_start();
    return $this;
  }

  protected function content($value) {
    $this -> content = $value;
    return $this;
  }

  public function templateEnd() {
    $this -> content(ob_get_clean());
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejNavigationDrawer";
  }
  
}
  ?>