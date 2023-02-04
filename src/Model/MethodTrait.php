<?php
namespace Banco\Model;

trait MethodTrait {
    public function __get(string $name)
    {
        $getMethod = 'get' . ucFirst($name);
        return $this->$getMethod();
    }
}