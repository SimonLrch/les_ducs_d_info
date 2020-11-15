<?php

namespace EJ;
class ContentTemplate extends \EJ\HtmlTag
{    
    public $tag;
    function __construct($tagName, $selfClosing=false){
        $this->tag = new \EJ\HtmlTag($tagName,$selfClosing);
    }
    function template($content){
        if (gettype($content) == "string") {
            $this->tag->htmlContent($content);
        }
        return $this->tag;
    }

}