<?php
namespace EJ;
class Diagram extends \EJ\Widget {
    
  public function backgroundColor($value) {
    $this->model["backgroundColor"] = $value;
    return $this;
  }
  
  public function backgroundImage($value) {
    $this->model["backgroundImage"] = $value;
    return $this;
  }
  
  public function bridgeDirection($value) {
    $this->model["bridgeDirection"] = $value;
    return $this;
  }
  
  public function commandManager($value) {
    $this->model["commandManager"] = $value;
    return $this;
  }
  
  public function connectors($value) {
    $this->model["connectors"] = $value;
    return $this;
  }
  
  public function connectorTemplate($value) {
    $this->model["connectorTemplate"] = $value;
    return $this;
  }
  
  public function constraints($value) {
    $this->model["constraints"] = $value;
    return $this;
  }
  
  public function contextMenu($value) {
    $this->model["contextMenu"] = $value;
    return $this;
  }
  
  public function dataSourceSettings($value) {
    $this->model["dataSourceSettings"] = $value;
    return $this;
  }
  
  public function defaultSettings($value) {
    $this->model["defaultSettings"] = $value;
    return $this;
  }
  
  public function drawType($value) {
    $this->model["drawType"] = $value;
    return $this;
  }
  
  public function enableAutoScroll($value) {
    $this->model["enableAutoScroll"] = $value;
    return $this;
  }
  
  public function enableContextMenu($value) {
    $this->model["enableContextMenu"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function historyManager($value) {
    $this->model["historyManager"] = $value;
    return $this;
  }
  
  public function labelRenderingMode($value) {
    $this->model["labelRenderingMode"] = $value;
    return $this;
  }
  
  public function layout($value) {
    $this->model["layout"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function nodes($value) {
    $this->model["nodes"] = $value;
    return $this;
  }
  
  public function layers($value) {
    $this->model["layers"] = $value;
    return $this;
  }
  
  public function nodeTemplate($value) {
    $this->model["nodeTemplate"] = $value;
    return $this;
  }
  
  public function pageSettings($value) {
    $this->model["pageSettings"] = $value;
    return $this;
  }
  
  public function scrollSettings($value) {
    $this->model["scrollSettings"] = $value;
    return $this;
  }
  
  public function selectedItems($value) {
    $this->model["selectedItems"] = $value;
    return $this;
  }
  
  public function showTooltip($value) {
    $this->model["showTooltip"] = $value;
    return $this;
  }
  
  public function serializationSettings($value) {
    $this->model["serializationSettings"] = $value;
    return $this;
  }
  
  public function rulerSettings($value) {
    $this->model["rulerSettings"] = $value;
    return $this;
  }
  
  public function snapSettings($value) {
    $this->model["snapSettings"] = $value;
    return $this;
  }
  
  public function tool($value) {
    $this->model["tool"] = $value;
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
  
  public function zoomFactor($value) {
    $this->model["zoomFactor"] = $value;
    return $this;
  }
  
  public function autoScrollChange($value) {
    $this->model["autoScrollChange"] = $value;
    return $this;
  }
  
  public function click($value) {
    $this->model["click"] = $value;
    return $this;
  }
  
  public function connectionChange($value) {
    $this->model["connectionChange"] = $value;
    return $this;
  }
  
  public function connectorCollectionChange($value) {
    $this->model["connectorCollectionChange"] = $value;
    return $this;
  }
  
  public function connectorSourceChange($value) {
    $this->model["connectorSourceChange"] = $value;
    return $this;
  }
  
  public function connectorTargetChange($value) {
    $this->model["connectorTargetChange"] = $value;
    return $this;
  }
  
  public function contextMenuBeforeOpen($value) {
    $this->model["contextMenuBeforeOpen"] = $value;
    return $this;
  }
  
  public function contextMenuClick($value) {
    $this->model["contextMenuClick"] = $value;
    return $this;
  }
  
  public function doubleClick($value) {
    $this->model["doubleClick"] = $value;
    return $this;
  }
  
  public function drag($value) {
    $this->model["drag"] = $value;
    return $this;
  }
  
  public function dragEnter($value) {
    $this->model["dragEnter"] = $value;
    return $this;
  }
  
  public function dragLeave($value) {
    $this->model["dragLeave"] = $value;
    return $this;
  }
  
  public function dragOver($value) {
    $this->model["dragOver"] = $value;
    return $this;
  }
  
  public function drop($value) {
    $this->model["drop"] = $value;
    return $this;
  }
  
  public function editorFocusChange($value) {
    $this->model["editorFocusChange"] = $value;
    return $this;
  }
  
  public function groupChange($value) {
    $this->model["groupChange"] = $value;
    return $this;
  }
  
  public function historyChange($value) {
    $this->model["historyChange"] = $value;
    return $this;
  }
  
  public function itemClick($value) {
    $this->model["itemClick"] = $value;
    return $this;
  }
  
  public function mouseEnter($value) {
    $this->model["mouseEnter"] = $value;
    return $this;
  }
  
  public function mouseLeave($value) {
    $this->model["mouseLeave"] = $value;
    return $this;
  }
  
  public function mouseOver($value) {
    $this->model["mouseOver"] = $value;
    return $this;
  }
  
  public function nodeCollectionChange($value) {
    $this->model["nodeCollectionChange"] = $value;
    return $this;
  }
  
  public function propertyChange($value) {
    $this->model["propertyChange"] = $value;
    return $this;
  }
  
  public function rotationChange($value) {
    $this->model["rotationChange"] = $value;
    return $this;
  }
  
  public function scrollChange($value) {
    $this->model["scrollChange"] = $value;
    return $this;
  }
  
  public function segmentChange($value) {
    $this->model["segmentChange"] = $value;
    return $this;
  }
  
  public function selectionChange($value) {
    $this->model["selectionChange"] = $value;
    return $this;
  }
  
  public function sizeChange($value) {
    $this->model["sizeChange"] = $value;
    return $this;
  }
  
  public function textChange($value) {
    $this->model["textChange"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function setTool($value) {
    $this->model["setTool"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejDiagram";
  }
  
    
}
  ?>