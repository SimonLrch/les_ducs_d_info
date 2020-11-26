<?php
namespace EJ;
class SplitButton extends \EJ\Widget {
    
  public function arrowPosition($value) {
    $this->model["arrowPosition"] = $value;
    return $this;
  }
  
  public function buttonMode($value) {
    $this->model["buttonMode"] = $value;
    return $this;
  }
  
  public function contentType($value) {
    $this->model["contentType"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
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
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function imagePosition($value) {
    $this->model["imagePosition"] = $value;
    return $this;
  }
  
  public function prefixIcon($value) {
    $this->model["prefixIcon"] = $value;
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
  
  public function suffixIcon($value) {
    $this->model["suffixIcon"] = $value;
    return $this;
  }
  
  public function targetID($value) {
    $this->model["targetID"] = $value;
    return $this;
  }
  
  public function target($value) {
    $this->model["target"] = $value;
    return $this;
  }
  
  public function text($value) {
    $this->model["text"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
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
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function destroy($value) {
    $this->model["destroy"] = $value;
    return $this;
  }
  
  public function itemMouseOut($value) {
    $this->model["itemMouseOut"] = $value;
    return $this;
  }
  
  public function itemMouseOver($value) {
    $this->model["itemMouseOver"] = $value;
    return $this;
  }
  
  public function itemSelected($value) {
    $this->model["itemSelected"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
    protected function tagName() {
    $wrapper = new \EJ\HtmlTag('div');
    $btn = new \EJ\HtmlTag('button');
    $this->setAttribute($btn,"id",$this->id);
    $wrapper->append($btn);
    $collections = $this->getProperty("item",$this);
    if($collections){
        return $wrapper->append($this->renderCollection($collections));
    }
    return $wrapper;
}
    
protected function renderCollection($collections){
    $ul = new \EJ\HtmlTag('ul');
    $this->setAttribute($ul,"id",$this->id."_splitbutton");
    $this->model["targetID"] = $this->id."_splitbutton";
    foreach($collections as $items)
    {               
        $ul->append($this->ChildNodes($items));            
    }        
    return $ul;
}    
protected function ChildNodes($item){
    $innerEle = $item->getObject();
    $element = new \EJ\HtmlTag('li');
    $anchor = new \EJ\HtmlTag('a');
    if($this->getProperty("id",$innerEle))
        $this->setAttribute($element,'id',$innerEle->id);
    if($this->getProperty("text",$innerEle)){            
        $anchor->htmlContent($innerEle->text);
    }
    if($this->getProperty("url",$innerEle)){
        $this->setAttribute($anchor, 'href', $innerEle->url);
    }
    if($this->getProperty("linkAttribute",$innerEle)){
        $this->setAttribute($anchor, null, $innerEle->linkAttribute);
    }
    if($this->getProperty("htmlAttribute",$innerEle)){
        $this->setAttribute($element, null, $innerEle->htmlAttribute);
    }
    if($this->getProperty("spriteCssClass",$innerEle)){
        $span = new \EJ\HtmlTag("span");
        $this->setAttribute($span, "class", $innerEle->spriteCssClass);
        $anchor->append($span);
    }
    if($this->getProperty("imageUrl",$innerEle)){
        $img = new \EJ\HtmlTag("img");
        $this->setAttribute($img, src, $innerEle->imageUrl);
        if($this->getProperty("imageAttributes",$innerEle)){
            $this->setAttribute($img, null, $innerEle->imageAttributes);
        }
        $anchor->append($img);
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
    return "ejSplitButton";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
    
}
  ?>