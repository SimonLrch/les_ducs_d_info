<?php
namespace EJ\Spreadsheet;
class PictureSetting {
    
  public function allowPictures ($value) {
    $this -> allowPictures = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>