<?php
namespace EJ;
Class DataManager {                              
    public function enableCaching($value){
        $this->model["enableCaching"] = $value;
        return $this;
    }
    public function url($value){
        $this->model["url"] = $value;
        return $this;
    }
    public function insertUrl($value){
        $this->model["insertUrl"] = $value;
        return $this;
    }
    public function updateUrl($value){
        $this->model["updateUrl"] = $value;
        return $this;
    }
    public function cachingPageSize($value){
        $this->model["cachingPageSize"] = $value;
        return $this;
    }
    public function timetoExpire($value){
        $this->model["timetoExpire"] = $value;
        return $this;
    }
    public function removeUrl($value){
        $this->model["removeUrl"] = $value;
        return $this;
    }
    public function crudUrl($value){
        $this->model["crudUrl"] = $value;
        return $this;
    }
    public function batchUrl($value){
        $this->model["batchUrl"] = $value;
        return $this;
    }
    public function adaptor($value){
        $this->model["adaptor"] = $value;
        return $this;
    }
    public function table($value){
        $this->model["table"] = $value;
        return $this;
    }
    public function json($value){
        $this->model["json"] = $value;
        return $this;
    }
    public function headers($value){
        $this->model["headers"] = $value;
        return $this;
    }
    public function accept($value){
        $this->model["accept"] = $value;
        return $this;
    }
    public function key($value){
        $this->model["key"] = $value;
        return $this;
    }
    public function crossDomain($value){
        $this->model["crossDomain"] = $value;
        return $this;
    }
    public function jsonp($value){
        $this->model["jsonp"] = $value;
        return $this;
    }
    public function dataType($value){
        $this->model["dataType"] = $value;
        return $this;
    }
    public function offline($value){
        $this->model["offline"] = $value;
        return $this;
    }
    public function requireFormat($value){
        $this->model["requireFormat"] = $value;
        return $this;
    }

    
}


?>