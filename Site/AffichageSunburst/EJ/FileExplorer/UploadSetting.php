<?php
namespace EJ\FileExplorer;
class UploadSetting {
    
  public function allowMultipleFile ($value) {
    $this -> allowMultipleFile = $value;
    return $this;
  }
  
  public function autoUpload ($value) {
    $this -> autoUpload = $value;
    return $this;
  }
  
  public function dialogAction ($value) {
    $this -> dialogAction = $value;
    return $this;
  }
  
  public function dialogPosition ($value) {
    $this -> dialogPosition = $value;
    return $this;
  }
  
  public function maxFileSize ($value) {
    $this -> maxFileSize = $value;
    return $this;
  }
  
  public function showFileDetails ($value) {
    $this -> showFileDetails = $value;
    return $this;
  }
  
}
  ?>