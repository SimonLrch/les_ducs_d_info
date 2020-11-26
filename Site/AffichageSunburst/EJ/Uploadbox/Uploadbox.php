<?php
namespace EJ;
class Uploadbox extends \EJ\Widget {
    
  public function allowDragAndDrop($value) {
    $this->model["allowDragAndDrop"] = $value;
    return $this;
  }
  
  public function asyncUpload($value) {
    $this->model["asyncUpload"] = $value;
    return $this;
  }
  
  public function autoUpload($value) {
    $this->model["autoUpload"] = $value;
    return $this;
  }
  
  public function buttonText($value) {
    $this->model["buttonText"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function customFileDetails($value) {
    $this->model["customFileDetails"] = $value;
    return $this;
  }
  
  public function dialogAction($value) {
    $this->model["dialogAction"] = $value;
    return $this;
  }
  
  public function dialogPosition($value) {
    $this->model["dialogPosition"] = $value;
    return $this;
  }
  
  public function dialogText($value) {
    $this->model["dialogText"] = $value;
    return $this;
  }
  
  public function dropAreaText($value) {
    $this->model["dropAreaText"] = $value;
    return $this;
  }
  
  public function dropAreaHeight($value) {
    $this->model["dropAreaHeight"] = $value;
    return $this;
  }
  
  public function dropAreaWidth($value) {
    $this->model["dropAreaWidth"] = $value;
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
  
  public function extensionsAllow($value) {
    $this->model["extensionsAllow"] = $value;
    return $this;
  }
  
  public function extensionsDeny($value) {
    $this->model["extensionsDeny"] = $value;
    return $this;
  }
  
  public function fileSize($value) {
    $this->model["fileSize"] = $value;
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
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function multipleFilesSelection($value) {
    $this->model["multipleFilesSelection"] = $value;
    return $this;
  }
  
  public function pushFile($value) {
    $this->model["pushFile"] = $value;
    return $this;
  }
  
  public function removeUrl($value) {
    $this->model["removeUrl"] = $value;
    return $this;
  }
  
  public function saveUrl($value) {
    $this->model["saveUrl"] = $value;
    return $this;
  }
  
  public function showBrowseButton($value) {
    $this->model["showBrowseButton"] = $value;
    return $this;
  }
  
  public function showFileDetails($value) {
    $this->model["showFileDetails"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function uploadName($value) {
    $this->model["uploadName"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function beforeSend($value) {
    $this->model["beforeSend"] = $value;
    return $this;
  }
  
  public function begin($value) {
    $this->model["begin"] = $value;
    return $this;
  }
  
  public function cancel($value) {
    $this->model["cancel"] = $value;
    return $this;
  }
  
  public function complete($value) {
    $this->model["complete"] = $value;
    return $this;
  }
  
  public function success($value) {
    $this->model["success"] = $value;
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
  
  public function error($value) {
    $this->model["error"] = $value;
    return $this;
  }
  
  public function fileSelect($value) {
    $this->model["fileSelect"] = $value;
    return $this;
  }
  
  public function inProgress($value) {
    $this->model["inProgress"] = $value;
    return $this;
  }
  
  public function remove($value) {
    $this->model["remove"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejUploadbox";
  }
  
    
}
  ?>