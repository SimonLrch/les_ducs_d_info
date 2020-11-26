<?php
namespace EJ;
class Dialog extends \EJ\Widget {
    
  public function actionButtons($value) {
    $this->model["actionButtons"] = $value;
    return $this;
  }
  
  public function ajaxSettings($value) {
    $this->model["ajaxSettings"] = $value;
    return $this;
  }
  
  public function allowDraggable($value) {
    $this->model["allowDraggable"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function animation($value) {
    $this->model["animation"] = $value;
    return $this;
  }
  
  public function backgroundScroll($value) {
    $this->model["backgroundScroll"] = $value;
    return $this;
  }
  
  public function closeOnEscape($value) {
    $this->model["closeOnEscape"] = $value;
    return $this;
  }
  
  public function containment($value) {
    $this->model["containment"] = $value;
    return $this;
  }
  
  public function contentType($value) {
    $this->model["contentType"] = $value;
    return $this;
  }
  
  public function contentUrl($value) {
    $this->model["contentUrl"] = $value;
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
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enableModal($value) {
    $this->model["enableModal"] = $value;
    return $this;
  }
  
  public function enablePersistence($value) {
    $this->model["enablePersistence"] = $value;
    return $this;
  }
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function faviconCSS($value) {
    $this->model["faviconCSS"] = $value;
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
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function maxHeight($value) {
    $this->model["maxHeight"] = $value;
    return $this;
  }
  
  public function maxWidth($value) {
    $this->model["maxWidth"] = $value;
    return $this;
  }
  
  public function minHeight($value) {
    $this->model["minHeight"] = $value;
    return $this;
  }
  
  public function minWidth($value) {
    $this->model["minWidth"] = $value;
    return $this;
  }
  
  public function position($value) {
    $this->model["position"] = $value;
    return $this;
  }
  
  public function showHeader($value) {
    $this->model["showHeader"] = $value;
    return $this;
  }
  
  public function showOnInit($value) {
    $this->model["showOnInit"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function target($value) {
    $this->model["target"] = $value;
    return $this;
  }
  
  public function title($value) {
    $this->model["title"] = $value;
    return $this;
  }
  
  public function tooltip($value) {
    $this->model["tooltip"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function zIndex($value) {
    $this->model["zIndex"] = $value;
    return $this;
  }
  
  public function showFooter($value) {
    $this->model["showFooter"] = $value;
    return $this;
  }
  
  public function footerTemplateId($value) {
    $this->model["footerTemplateId"] = $value;
    return $this;
  }
  
  public function actionButtonClick($value) {
    $this->model["actionButtonClick"] = $value;
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
  
  public function beforeOpen($value) {
    $this->model["beforeOpen"] = $value;
    return $this;
  }
  
  public function beforeClose($value) {
    $this->model["beforeClose"] = $value;
    return $this;
  }
  
  public function close($value) {
    $this->model["close"] = $value;
    return $this;
  }
  
  public function collapse($value) {
    $this->model["collapse"] = $value;
    return $this;
  }
  
  public function contentLoad($value) {
    $this->model["contentLoad"] = $value;
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
  
  public function drag($value) {
    $this->model["drag"] = $value;
    return $this;
  }
  
  public function dragStart($value) {
    $this->model["dragStart"] = $value;
    return $this;
  }
  
  public function dragStop($value) {
    $this->model["dragStop"] = $value;
    return $this;
  }
  
  public function expand($value) {
    $this->model["expand"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function resize($value) {
    $this->model["resize"] = $value;
    return $this;
  }
  
  public function resizeStart($value) {
    $this->model["resizeStart"] = $value;
    return $this;
  }
  
  public function resizeStop($value) {
    $this->model["resizeStop"] = $value;
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
    return "ejDialog";
  }
  
}
  ?>