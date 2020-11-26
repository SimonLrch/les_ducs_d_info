<?php
namespace EJ;
class Scroller extends \EJ\Widget {
    
  public function animationSpeed($value) {
    $this->model["animationSpeed"] = $value;
    return $this;
  }
  
  public function autoHide($value) {
    $this->model["autoHide"] = $value;
    return $this;
  }
  
  public function buttonSize($value) {
    $this->model["buttonSize"] = $value;
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
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableTouchScroll($value) {
    $this->model["enableTouchScroll"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function scrollerSize($value) {
    $this->model["scrollerSize"] = $value;
    return $this;
  }
  
  public function scrollLeft($value) {
    $this->model["scrollLeft"] = $value;
    return $this;
  }
  
  public function scrollOneStepBy($value) {
    $this->model["scrollOneStepBy"] = $value;
    return $this;
  }
  
  public function scrollTop($value) {
    $this->model["scrollTop"] = $value;
    return $this;
  }
  
  public function targetPane($value) {
    $this->model["targetPane"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
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
  
  public function thumbMove($value) {
    $this->model["thumbMove"] = $value;
    return $this;
  }
  
  public function thumbStart($value) {
    $this->model["thumbStart"] = $value;
    return $this;
  }
  
  public function thumbEnd($value) {
    $this->model["thumbEnd"] = $value;
    return $this;
  }
  
  public function wheelMove($value) {
    $this->model["wheelMove"] = $value;
    return $this;
  }
  
  public function wheelStart($value) {
    $this->model["wheelStart"] = $value;
    return $this;
  }
  
  public function wheelStop($value) {
    $this->model["wheelStop"] = $value;
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
	$wrapper = new \EJ\HtmlTag('div');	
	$contentpane = $this->getProperty("content",$this);
	if($contentpane){
		$contents = new \EJ\ContentTemplate('div');
		$contents->template($this->content);
		return $wrapper->append($contents->tag);
	}
	return $wrapper;
}
  protected function PluginName() {
    return "ejScroller";
  }
  
}
  ?>