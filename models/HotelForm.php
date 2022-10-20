<?php

namespace app\models;

use Yii;
use yii\base\Model;

class HotelForm extends Model
{
    public $room_name;
    public $book = false;
    public $update_days = false;
    public $update_db = false;

    public function book($room_name) {
        $this->room_name = $room_name;
        $this->book = true;
    }

    public function updateDays() {
        $this->update_days = $update_days;
    }

    public function updateDb() {
        $this->update_db = $update_db;
    }
}