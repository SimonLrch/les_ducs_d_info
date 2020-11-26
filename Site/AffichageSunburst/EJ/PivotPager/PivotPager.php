<?php
namespace EJ;
class PivotPager extends \EJ\Widget {
    
  public function categoricalCurrentPage($value) {
    $this->model["categoricalCurrentPage"] = $value;
    return $this;
  }
  
  public function categoricalPageCount($value) {
    $this->model["categoricalPageCount"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function mode($value) {
    $this->model["mode"] = $value;
    return $this;
  }
  
  public function seriesCurrentPage($value) {
    $this->model["seriesCurrentPage"] = $value;
    return $this;
  }
  
  public function seriesPageCount($value) {
    $this->model["seriesPageCount"] = $value;
    return $this;
  }
  
  public function targetControlID($value) {
    $this->model["targetControlID"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejPivotPager";
  }
  
    
}
  ?>