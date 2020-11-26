<?php
namespace EJ;
class Menu extends \EJ\Widget {
    
  public function animationType($value) {
    $this->model["animationType"] = $value;
    return $this;
  }
  
  public function contextMenuTarget($value) {
    $this->model["contextMenuTarget"] = $value;
    return $this;
  }
  
  public function container($value) {
    $this->model["container"] = $value;
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
  
  public function enableCenterAlign($value) {
    $this->model["enableCenterAlign"] = $value;
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
  
  public function enableSeparator($value) {
    $this->model["enableSeparator"] = $value;
    return $this;
  }
  
  public function excludeTarget($value) {
    $this->model["excludeTarget"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
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
  
  public function menuType($value) {
    $this->model["menuType"] = $value;
    return $this;
  }
  
  public function openOnClick($value) {
    $this->model["openOnClick"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function showRootLevelArrows($value) {
    $this->model["showRootLevelArrows"] = $value;
    return $this;
  }
  
  public function showSubLevelArrows($value) {
    $this->model["showSubLevelArrows"] = $value;
    return $this;
  }
  
  public function subMenuDirection($value) {
    $this->model["subMenuDirection"] = $value;
    return $this;
  }
  
  public function titleText($value) {
    $this->model["titleText"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function overflowHeight($value) {
    $this->model["overflowHeight"] = $value;
    return $this;
  }
  
  public function overflowWidth($value) {
    $this->model["overflowWidth"] = $value;
    return $this;
  }
  
  public function beforeOpen($value) {
    $this->model["beforeOpen"] = $value;
    return $this;
  }
  
  public function click($value) {
    $this->model["click"] = $value;
    return $this;
  }
  
  public function close($value) {
    $this->model["close"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
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
  
  public function keydown($value) {
    $this->model["keydown"] = $value;
    return $this;
  }
  
  public function mouseout($value) {
    $this->model["mouseout"] = $value;
    return $this;
  }
  
  public function mouseover($value) {
    $this->model["mouseover"] = $value;
    return $this;
  }
  
  public function overflowOpen($value) {
    $this->model["overflowOpen"] = $value;
    return $this;
  }
  
  public function overflowClose($value) {
    $this->model["overflowClose"] = $value;
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
  
    protected function tagName(){
  $wrapper = new \EJ\HtmlTag('ul');
  $collections = $this->getProperty("item",$this);
  if($collections){
	  foreach($collections as $items)
    {               
      $wrapper->append($this->SubMenu($items));            
    }      
  }
  else{
    $wrapper = new \EJ\ContentTemplate('ul');
    return $wrapper->template($this->content);
  }
  return $wrapper;
}
 
protected function SubMenu($item){
	$innerEle = $item->getObject();
	$element = new \EJ\HtmlTag('li');  
	if($this->getProperty("id",$innerEle))
		$this->setAttribute($element,'id',$innerEle->id);
	if($this->getProperty("text",$innerEle)){
		$anchor = new \EJ\HtmlTag('a');
		$anchor->htmlContent($innerEle->text);
	}
	if($this->getProperty("url",$innerEle)){
		if(!($anchor)){
			$anchor = new \EJ\HtmlTag('a');
		}
		$anchor->setAttribute($element, 'href', $innerEle->URL);
	}
  $element->append($anchor);
	if($this->getProperty("item",$innerEle)){            
		$innerUL = new \EJ\HtmlTag('ul');
		for($i=0;$i<count($item->item);$i++){
			$innerUL->append($this->SubMenu($item->item[$i])); 
		} 
		$element->append($innerUL);
	}     
	return $element;
} 
  protected function PluginName() {
    return "ejMenu";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
}
  ?>