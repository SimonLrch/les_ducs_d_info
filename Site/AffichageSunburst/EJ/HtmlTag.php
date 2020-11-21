<?php

namespace EJ;
class HtmlTag extends Serialize
{
    protected $tagName;
    protected $selfClosing;
    protected $childControls = array();
    protected $innerHtml = '';

    function __construct($tagName, $selfClosing = false) {
        $this->tagName = $tagName;
        $this->selfClosing = $selfClosing;
        $this;
    }

    public function tagName() {
        return $this->tagName;
    }

    public function htmlContent($value) {
        $this->innerHtml = $value;
        $this->childControls = array();

        return $this;
    }

    public function append($node) {
        $this->childControls[] = $node;

        return $this;
    }

    public function render() {
        return $this->outerHtml();
    }

    public function outerHtml() {        
        $Wrapper = array();

        $Wrapper[] = '<';
        $Wrapper[] = $this->tagName();

        foreach ($this->attributes as $key => $value) {
            $Wrapper[] = ' ';
            $Wrapper[] = $key;
            $Wrapper[] = '="';
            $Wrapper[] = $value;
            $Wrapper[] = '"';
        }

        if ($this->selfClosing) {
            $Wrapper[] = ' />';
        } else {
            $Wrapper[] = '>';

            if ($this->innerHtml !== '') {
                $Wrapper[] = $this->innerHtml;
            }

            foreach ($this->childControls as $child) {
                $Wrapper[] = $child->render();
            }

            $Wrapper[] = '</';
            $Wrapper[] = $this->tagName();
            $Wrapper[] = '>';
        }

        return implode($Wrapper);
    }
}