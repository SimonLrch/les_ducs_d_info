<?php

namespace EJ;
Class Query
{
    public function addParams($value){
        $this->model["addParams"] = $value;
        return $this;
    }
    public function aggregate($value){
        $this->model["aggregate"] = $value;
        return $this;
    }
    public function cloning($value){
        $this->model["clone"] = $value;
        return $this;
    }
    public function execute($value){
        $this->model["execute"] = $value;
        return $this;
    }
    public function executeLocal($value){
        $this->model["executeLocal"] = $value;
        return $this;
    }
    public function expand($value){
        $this->model["expand"] = $value;
        return $this;
    }
    public function foreignKey($value){
        $this->model["foreignKey"] = $value;
        return $this;
    }
    public function from($value){
        $this->model["from"] = $value;
        return $this;
    }
    public function group($value){
        $this->model["group"] = $value;
        return $this;
    }
    public function hierarchy($value){
        $this->model["hierarchy"] = $value;
        return $this;
    }
    public function key($value){
        $this->model["key"] = $value;
        return $this;
    }
    public function page($value){
        $this->model["page"] = $value;
        return $this;
    }
    public function range($value){
        $this->model["range"] = $value;
        return $this;
    }
    public function requiresCount($value){
        $this->model["requiresCount"] = $value;
        return $this;
    }
    public function search($value){
        $this->model["search"] = $value;
        return $this;
    }
    public function select($value){
        $this->model["select"] = $value;
        return $this;
    }
    public function skip($value){
        $this->model["skip"] = $value;
        return $this;
    }
    public function sortBy($value){
        $this->model["sortBy"] = $value;
        return $this;
    }
    public function sortByDesc($value){
        $this->model["sortByDesc"] = $value;
        return $this;
    }
    public function take($value){
        $this->model["take"] = $value;
        return $this;
    }
    public function using($value){
        $this->model["using"] = $value;
        return $this;
    }
    public function where($value){
        $this->model["where"] = $value;
        return $this;
    }    
    
}

?>