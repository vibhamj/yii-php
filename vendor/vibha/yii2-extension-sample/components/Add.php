<?php

//namespace added manually after installing vibha extension - to match extensions.php alias
namespace yii\extensionsample\components;

class Add
{
    public function add($value1, $value2)
    {
        $sum = 0;
       try {
            $sum = $value1 + $value2;
        } 
        //catch(\Error $e) {}
        catch(\TypeError $e) {
            //Yii::error("Not a number");
            throw new \TypeError(sprintf('Input not a number. Please enter two numbers to add.'));
        }
        return $sum;
    }
}