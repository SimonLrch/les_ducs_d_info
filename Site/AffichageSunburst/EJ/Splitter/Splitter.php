<?php
namespace EJ;
class Splitter extends \EJ\Widget {
    
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function animationSpeed($value) {
    $this->model["animationSpeed"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
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
  
  public function expanderTemplate($value) {
    $this->model["expanderTemplate"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function properties($value) {
    $this->model["properties"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function beforeExpandCollapse($value) {
    $this->model["beforeExpandCollapse"] = $value;
    return $this;
  }
  
  public function clickOnExpander($value) {
    $this->model["clickOnExpander"] = $value;
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
  
  public function expandCollapse($value) {
    $this->model["expandCollapse"] = $value;
    return $this;
  }
  
  public function resize($value) {
    $this->model["resize"] = $value;
    return $this;
  }
  
    protected function tagName() {
	$wrapper = new \EJ\HtmlTag('div');
	$panes = $this->item;
	$content="";
	if($panes){
		foreach($panes as $pane){
			$innerEle = $pane->getObject();
			if($this->getProperty("content",$innerEle)){
				$content = new \EJ\ContentTemplate('div');
				$content->template($innerEle->content);
				$wrapper->append($content->tag); 
			}
		}
	}
	return $wrapper;
}
  protected function PluginName() {
    return "ejSplitter";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
    
}
  ?>