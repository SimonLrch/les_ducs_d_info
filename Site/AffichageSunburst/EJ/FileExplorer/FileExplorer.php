<?php
namespace EJ;
class FileExplorer extends \EJ\Widget {
    
  public function ajaxAction($value) {
    $this->model["ajaxAction"] = $value;
    return $this;
  }
  
  public function ajaxDataType($value) {
    $this->model["ajaxDataType"] = $value;
    return $this;
  }
  
  public function ajaxSettings($value) {
    $this->model["ajaxSettings"] = $value;
    return $this;
  }
  
  public function allowDragAndDrop($value) {
    $this->model["allowDragAndDrop"] = $value;
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
  
  public function contextMenuSettings($value) {
    $this->model["contextMenuSettings"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function enablePersistence($value) {
    $this->model["enablePersistence"] = $value;
    return $this;
  }
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableThumbnailCompress($value) {
    $this->model["enableThumbnailCompress"] = $value;
    return $this;
  }
  
  public function fileTypes($value) {
    $this->model["fileTypes"] = $value;
    return $this;
  }
  
  public function filterSettings($value) {
    $this->model["filterSettings"] = $value;
    return $this;
  }
  
  public function gridSettings($value) {
    $this->model["gridSettings"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
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
  
  public function maxHeight($value) {
    $this->model["maxHeight"] = $value;
    return $this;
  }
  
  public function maxWidth($value) {
    $this->model["maxWidth"] = $value;
    return $this;
  }
  
  public function minHeight($value) {
    $this->model["minHeight"] = $value;
    return $this;
  }
  
  public function minWidth($value) {
    $this->model["minWidth"] = $value;
    return $this;
  }
  
  public function path($value) {
    $this->model["path"] = $value;
    return $this;
  }
  
  public function rootFolderName($value) {
    $this->model["rootFolderName"] = $value;
    return $this;
  }
  
  public function selectedFolder($value) {
    $this->model["selectedFolder"] = $value;
    return $this;
  }
  
  public function selectedItems($value) {
    $this->model["selectedItems"] = $value;
    return $this;
  }
  
  public function showCheckbox($value) {
    $this->model["showCheckbox"] = $value;
    return $this;
  }
  
  public function showContextMenu($value) {
    $this->model["showContextMenu"] = $value;
    return $this;
  }
  
  public function showFooter($value) {
    $this->model["showFooter"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function showThumbnail($value) {
    $this->model["showThumbnail"] = $value;
    return $this;
  }
  
  public function showToolbar($value) {
    $this->model["showToolbar"] = $value;
    return $this;
  }
  
  public function showNavigationPane($value) {
    $this->model["showNavigationPane"] = $value;
    return $this;
  }
  
  public function tools($value) {
    $this->model["tools"] = $value;
    return $this;
  }
  
  public function toolsList($value) {
    $this->model["toolsList"] = $value;
    return $this;
  }
  
  public function uploadSettings($value) {
    $this->model["uploadSettings"] = $value;
    return $this;
  }
  
  public function virtualItemCount($value) {
    $this->model["virtualItemCount"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function beforeAjaxRequest($value) {
    $this->model["beforeAjaxRequest"] = $value;
    return $this;
  }
  
  public function beforeDownload($value) {
    $this->model["beforeDownload"] = $value;
    return $this;
  }
  
  public function beforeGetImage($value) {
    $this->model["beforeGetImage"] = $value;
    return $this;
  }
  
  public function beforeOpen($value) {
    $this->model["beforeOpen"] = $value;
    return $this;
  }
  
  public function beforeUpload($value) {
    $this->model["beforeUpload"] = $value;
    return $this;
  }
  
  public function beforeUploadDialogOpen($value) {
    $this->model["beforeUploadDialogOpen"] = $value;
    return $this;
  }
  
  public function beforeUploadSend($value) {
    $this->model["beforeUploadSend"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function copy($value) {
    $this->model["copy"] = $value;
    return $this;
  }
  
  public function createFolder($value) {
    $this->model["createFolder"] = $value;
    return $this;
  }
  
  public function cut($value) {
    $this->model["cut"] = $value;
    return $this;
  }
  
  public function destroy($value) {
    $this->model["destroy"] = $value;
    return $this;
  }
  
  public function dragStart($value) {
    $this->model["dragStart"] = $value;
    return $this;
  }
  
  public function drag($value) {
    $this->model["drag"] = $value;
    return $this;
  }
  
  public function dragStop($value) {
    $this->model["dragStop"] = $value;
    return $this;
  }
  
  public function drop($value) {
    $this->model["drop"] = $value;
    return $this;
  }
  
  public function getImage($value) {
    $this->model["getImage"] = $value;
    return $this;
  }
  
  public function keydown($value) {
    $this->model["keydown"] = $value;
    return $this;
  }
  
  public function layoutChange($value) {
    $this->model["layoutChange"] = $value;
    return $this;
  }
  
  public function menuBeforeOpen($value) {
    $this->model["menuBeforeOpen"] = $value;
    return $this;
  }
  
  public function menuClick($value) {
    $this->model["menuClick"] = $value;
    return $this;
  }
  
  public function menuOpen($value) {
    $this->model["menuOpen"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function paste($value) {
    $this->model["paste"] = $value;
    return $this;
  }
  
  public function remove($value) {
    $this->model["remove"] = $value;
    return $this;
  }
  
  public function resize($value) {
    $this->model["resize"] = $value;
    return $this;
  }
  
  public function resizeStart($value) {
    $this->model["resizeStart"] = $value;
    return $this;
  }
  
  public function resizeStop($value) {
    $this->model["resizeStop"] = $value;
    return $this;
  }
  
  public function select($value) {
    $this->model["select"] = $value;
    return $this;
  }
  
  public function templateRefresh($value) {
    $this->model["templateRefresh"] = $value;
    return $this;
  }
  
  public function unselect($value) {
    $this->model["unselect"] = $value;
    return $this;
  }
  
  public function uploadComplete($value) {
    $this->model["uploadComplete"] = $value;
    return $this;
  }
  
  public function uploadError($value) {
    $this->model["uploadError"] = $value;
    return $this;
  }
  
  public function uploadSuccess($value) {
    $this->model["uploadSuccess"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejFileExplorer";
  }
  
    
}
  ?>