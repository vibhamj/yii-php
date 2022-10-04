<?php

//namespace added manually after installing vibha extension - to match extensions.php alias
namespace yii\extensionsample\components;

class Add
{
    public function add($value1, $value2)
    {
        return $value1 + $value2;
    }
}