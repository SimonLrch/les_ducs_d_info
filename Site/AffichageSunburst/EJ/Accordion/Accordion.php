<?php
namespace EJ;
class Accordion extends \EJ\Widget {
    
  public function ajaxSettings($value) {
    $this->model["ajaxSettings"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function collapseSpeed($value) {
    $this->model["collapseSpeed"] = $value;
    return $this;
  }
  
  public function collapsible($value) {
    $this->model["collapsible"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function customIcon($value) {
    $this->model["customIcon"] = $value;
    return $this;
  }
  
  public function disabledItems($value) {
    $this->model["disabledItems"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enabledItems($value) {
    $this->model["enabledItems"] = $value;
    return $this;
  }
  
  public function enableMultipleOpen($value) {
    $this->model["enableMultipleOpen"] = $value;
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
  
  public function events($value) {
    $this->model["events"] = $value;
    return $this;
  }
  
  public function expandSpeed($value) {
    $this->model["expandSpeed"] = $value;
    return $this;
  }
  
  public function headerSize($value) {
    $this->model["headerSize"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function heightAdjustMode($value) {
    $this->model["heightAdjustMode"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function selectedItemIndex($value) {
    $this->model["selectedItemIndex"] = $value;
    return $this;
  }
  
  public function selectedItems($value) {
    $this->model["selectedItems"] = $value;
    return $this;
  }
  
  public function showCloseButton($value) {
    $this->model["showCloseButton"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function activate($value) {
    $this->model["activate"] = $value;
    return $this;
  }
  
  public function ajaxBeforeLoad($value) {
    $this->model["ajaxBeforeLoad"] = $value;
    return $this;
  }
  
  public function ajaxError($value) {
    $this->model["ajaxError"] = $value;
    return $this;
  }
  
  public function ajaxLoad($value) {
    $this->model["ajaxLoad"] = $value;
    return $this;
  }
  
  public function ajaxSuccess($value) {
    $this->model["ajaxSuccess"] = $value;
    return $this;
  }
  
  public function beforeActivate($value) {
    $this->model["beforeActivate"] = $value;
    return $this;
  }
  
  public function beforeInactivate($value) {
    $this->model["beforeInactivate"] = $value;
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
  
  public function inActivate($value) {
    $this->model["inActivate"] = $value;
    return $this;
  }
  
        protected function tagName() {
	$wrapper = new \EJ\HtmlTag('div');
	$panels = $this->item;
	if($panels){
		foreach($panels as $panel){
			$header = new \EJ\HtmlTag('h3');
			$anchor = new \EJ\HtmlTag('a');
			$innerEle = $panel->getObject();
			
			if ($this->getProperty("text",$innerEle)) {
				$anchor->htmlContent($innerEle->text);
			}
			if($this->getProperty("headerIconClass",$innerEle)){
				$iconElement = new \EJ\HtmlTag('div');  
				$this->setAttribute($iconElement,'class',$innerEle->headerIconClass);
				$header->append($iconElement);
			}
			if($this->getProperty("ajaxURL",$innerEle)){
				$this->setAttribute($anchor,'href',$innerEle->ajaxURL);
			}else{
				$this->setAttribute($anchor,'href','#');
			}
			$header->append($anchor);
			$content = new \EJ\ContentTemplate('div');
      if ($this->getProperty("content",$innerEle)) {
			  $content->template($innerEle->content);
      }
			$wrapper->append($header);
			$wrapper->append($content->tag);
		}
	}
	return $wrapper;
}

 public function getObject() {
    return  $this ;
  }
  protected function PluginName() {
    return "ejAccordion";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
    
}
  ?>