<?php
namespace EJ;
class GroupButton extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function groupButtonMode($value) {
    $this->model["groupButtonMode"] = $value;
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
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function selectedItemIndex($value) {
    $this->model["selectedItemIndex"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function size($value) {
    $this->model["size"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
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
  
  public function keyPress($value) {
    $this->model["keyPress"] = $value;
    return $this;
  }
  
  public function select($value) {
    $this->model["select"] = $value;
    return $this;
  }
  
    protected function tagName() {
    $wrapper = new \EJ\HtmlTag('div');
    $collections = $this->getProperty("item",$this);
    $ul = new \EJ\HtmlTag('ul');
    if($collections){            
        foreach($collections as $item){
            $li = new \EJ\HtmlTag('li');
            $innerEle = $item->getObject();
            if ($this->getProperty("id",$innerEle)) {
                $this->setAttribute($li,"id",$innerEle->id);
            }
            if ($this->getProperty("text",$innerEle)) {
                $li->htmlContent($innerEle->text);
            }
            if ($this->getProperty("href",$innerEle)){
                $this->setAttribute($li,"href",$innerEle->href);                        
            }
            $ul->append($li);
        }
        $wrapper->append($ul);
    }
    return $wrapper;
}
  protected function PluginName() {
    return "ejGroupButton";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
    
}
  ?>