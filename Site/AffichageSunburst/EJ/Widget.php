<?php

namespace EJ;

abstract class Widget extends Serialize{
    
    protected function tagName(){
        return new \EJ\HtmlTag("div", false);   
    }
    
    abstract protected function pluginName();
    
    protected $model = array();
    protected $attributes = array();
    protected $id;
    
    function __construct($id){
        $this->id = $id;
    }
    
    protected function HtmlContent(){
        $element = $this->tagName();
        if(!$this instanceof \EJ\SplitButton) $this->addAttribute($element);
        return $element->outerHtml();
    }
    
    public function render(){
        $wrapper= $this->HtmlContent();
        $content = $this->getInitializer();
        $html = $wrapper ."<script>$content</script>";
        return $html;
    }

    protected function getProperty($key,$ele) {
        if (array_key_exists($key, $ele)) {
            return $ele->$key;
        }

        return null;
    }

    protected function addAttribute(\EJ\HtmlTag $element) {
        $element->attributes['id'] = $this->id;
        if ($element->tagName() == 'textarea' || $element->tagName() == 'input' || $element->tagName() == 'select') {
            if(isset($this->model->name) && isEmpty($this->model->name))
            $element->attributes['name'] = $this->id;
        }    
    }
    protected function setAttribute(\EJ\HtmlTag $element, $attr, $val){
        if($attr) {
            $element->attributes[$attr] = $val;
        } else {
            foreach ($attr as $key => $value) {
                $element->attributes[$key] = $value;
            }
        }
        return $element;
    }

    protected function getInitializer(){
        $json = $this->serialize();
        if(strlen($json) < 3)
            $json = "";
        return "$(function(){ $('#$this->id').". $this->pluginName() ."(". $json ."); })";
    }
}
