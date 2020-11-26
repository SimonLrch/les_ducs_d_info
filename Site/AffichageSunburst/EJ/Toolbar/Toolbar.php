<?php
namespace EJ;
class Toolbar extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function disabledItemIndices($value) {
    $this->model["disabledItemIndices"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enabledItemIndices($value) {
    $this->model["enabledItemIndices"] = $value;
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
  
  public function hide($value) {
    $this->model["hide"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function Items($value) {
    $this->model["Items"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function responsiveType($value) {
    $this->model["responsiveType"] = $value;
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
  
  public function click($value) {
    $this->model["click"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function focusOut($value) {
    $this->model["focusOut"] = $value;
    return $this;
  }
  
  public function destroy($value) {
    $this->model["destroy"] = $value;
    return $this;
  }
  
  public function itemHover($value) {
    $this->model["itemHover"] = $value;
    return $this;
  }
  
  public function itemLeave($value) {
    $this->model["itemLeave"] = $value;
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
  
    protected function tagName() {
    $wrapper = new \EJ\HtmlTag('div');
    if($this->getProperty("item",$this)){
		$panels = $this->item;
		if($panels){
			foreach($panels as $panel){
              $innerEle = $panel->getObject();
              $content = new \EJ\ContentTemplate('ul');
              $content->template($innerEle->content);
              $wrapper->append($content->tag);
			}
		}	
    }
    return $wrapper;
}
  protected function PluginName() {
    return "ejToolbar";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
}
  ?>