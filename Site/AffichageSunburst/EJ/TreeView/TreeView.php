<?php
namespace EJ;
class TreeView extends \EJ\Widget {
    
  public function allowDragAndDrop($value) {
    $this->model["allowDragAndDrop"] = $value;
    return $this;
  }
  
  public function allowDragAndDropAcrossControl($value) {
    $this->model["allowDragAndDropAcrossControl"] = $value;
    return $this;
  }
  
  public function allowDropSibling($value) {
    $this->model["allowDropSibling"] = $value;
    return $this;
  }
  
  public function allowDropChild($value) {
    $this->model["allowDropChild"] = $value;
    return $this;
  }
  
  public function allowEditing($value) {
    $this->model["allowEditing"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function allowMultiSelection($value) {
    $this->model["allowMultiSelection"] = $value;
    return $this;
  }
  
  public function autoCheck($value) {
    $this->model["autoCheck"] = $value;
    return $this;
  }
  
  public function autoCheckParentNode($value) {
    $this->model["autoCheckParentNode"] = $value;
    return $this;
  }
  
  public function checkedNodes($value) {
    $this->model["checkedNodes"] = $value;
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
  
  public function enableMultipleExpand($value) {
    $this->model["enableMultipleExpand"] = $value;
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
  
  public function expandedNodes($value) {
    $this->model["expandedNodes"] = $value;
    return $this;
  }
  
  public function expandOn($value) {
    $this->model["expandOn"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function fullRowSelect($value) {
    $this->model["fullRowSelect"] = $value;
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
  
  public function loadOnDemand($value) {
    $this->model["loadOnDemand"] = $value;
    return $this;
  }
  
  public function selectedNode($value) {
    $this->model["selectedNode"] = $value;
    return $this;
  }
  
  public function selectedNodes($value) {
    $this->model["selectedNodes"] = $value;
    return $this;
  }
  
  public function showCheckbox($value) {
    $this->model["showCheckbox"] = $value;
    return $this;
  }
  
  public function sortSettings($value) {
    $this->model["sortSettings"] = $value;
    return $this;
  }
  
  public function template($value) {
    $this->model["template"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function beforeAdd($value) {
    $this->model["beforeAdd"] = $value;
    return $this;
  }
  
  public function beforeCollapse($value) {
    $this->model["beforeCollapse"] = $value;
    return $this;
  }
  
  public function beforeCut($value) {
    $this->model["beforeCut"] = $value;
    return $this;
  }
  
  public function beforeDelete($value) {
    $this->model["beforeDelete"] = $value;
    return $this;
  }
  
  public function beforeEdit($value) {
    $this->model["beforeEdit"] = $value;
    return $this;
  }
  
  public function beforeExpand($value) {
    $this->model["beforeExpand"] = $value;
    return $this;
  }
  
  public function beforeLoad($value) {
    $this->model["beforeLoad"] = $value;
    return $this;
  }
  
  public function beforePaste($value) {
    $this->model["beforePaste"] = $value;
    return $this;
  }
  
  public function beforeSelect($value) {
    $this->model["beforeSelect"] = $value;
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
  
  public function inlineEditValidation($value) {
    $this->model["inlineEditValidation"] = $value;
    return $this;
  }
  
  public function keyPress($value) {
    $this->model["keyPress"] = $value;
    return $this;
  }
  
  public function loadError($value) {
    $this->model["loadError"] = $value;
    return $this;
  }
  
  public function loadSuccess($value) {
    $this->model["loadSuccess"] = $value;
    return $this;
  }
  
  public function nodeAdd($value) {
    $this->model["nodeAdd"] = $value;
    return $this;
  }
  
  public function nodeCheck($value) {
    $this->model["nodeCheck"] = $value;
    return $this;
  }
  
  public function nodeClick($value) {
    $this->model["nodeClick"] = $value;
    return $this;
  }
  
  public function nodeCollapse($value) {
    $this->model["nodeCollapse"] = $value;
    return $this;
  }
  
  public function nodeCut($value) {
    $this->model["nodeCut"] = $value;
    return $this;
  }
  
  public function nodeDelete($value) {
    $this->model["nodeDelete"] = $value;
    return $this;
  }
  
  public function nodeDrag($value) {
    $this->model["nodeDrag"] = $value;
    return $this;
  }
  
  public function nodeDragStart($value) {
    $this->model["nodeDragStart"] = $value;
    return $this;
  }
  
  public function nodeDragStop($value) {
    $this->model["nodeDragStop"] = $value;
    return $this;
  }
  
  public function nodeDropped($value) {
    $this->model["nodeDropped"] = $value;
    return $this;
  }
  
  public function nodeEdit($value) {
    $this->model["nodeEdit"] = $value;
    return $this;
  }
  
  public function nodeExpand($value) {
    $this->model["nodeExpand"] = $value;
    return $this;
  }
  
  public function nodePaste($value) {
    $this->model["nodePaste"] = $value;
    return $this;
  }
  
  public function nodeSelect($value) {
    $this->model["nodeSelect"] = $value;
    return $this;
  }
  
  public function nodeUncheck($value) {
    $this->model["nodeUncheck"] = $value;
    return $this;
  }
  
  public function nodeUnselect($value) {
    $this->model["nodeUnselect"] = $value;
    return $this;
  }
  
  public function ready($value) {
    $this->model["ready"] = $value;
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
  $wrapper = new \EJ\HtmlTag('div');
  $collections = $this->getProperty("item",$this);
  if($collections){
	  return $wrapper->append($this->renderCollection($collections));
  }
  return $wrapper;
}
 protected function renderCollection($collections){
	$ul = new \EJ\HtmlTag('ul');
	foreach($collections as $items)
	{               
		$ul->append($this->ChildNodes($items));            
	}        
	return $ul;
}    
protected function ChildNodes($item){
	$innerEle = $item->getObject();
	$element = new \EJ\HtmlTag('li');
	if($this->getProperty("isChecked",$innerEle))
		$this->setAttribute($element,'class',$innerEle->isChecked);
	if($this->getProperty("expanded",$innerEle))
		$this->setAttribute($element,'class',$innerEle->expanded);        
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
		$this->setAttribute($anchor, 'href', $innerEle->URL);
	}
	if($this->getProperty("linkAttribute",$innerEle)){
		$this->setAttribute($anchor, null, $innerEle->linkAttribute);
	}
	if($this->getProperty("htmlAttribute",$innerEle)){
		$this->setAttribute($element, null, $innerEle->htmlAttribute);
	}
	if($this->getProperty("item",$innerEle)){            
		$innerUL = new \EJ\HtmlTag('ul');
		for($i=0;$i<count($item->item);$i++){
			$innerUL->append($this->ChildNodes($item->item[$i])); 
		} 
		$element->append($innerUL);
	}     
	$element->append($anchor);
	return $element;
} 


  protected function PluginName() {
    return "ejTreeView";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
}
  ?>