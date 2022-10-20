<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Hotel;

define("DAYS_TO_UPDATE_TO_DB", "days_to_update_to_db");
define("ROOMS_KEY","rooms_data");

class HotelController extends Controller
{
    public $room_name_to_checkin;
    public $room_name_to_checkout;

    public function actionIndex()
    {
        //read from cache if present, else set value to cache to avoid calculating each time
        $days_to_update = Yii::$app->cache->getOrSet(DAYS_TO_UPDATE_TO_DB, function () {
            return $this->defaultDaysToUpdate();
        });

        //query caching: if result already in cache it will return from cache
        $rooms_data_using_query_cache = Hotel::getDb()->cache(function () {
            //return Hotel::find()->where(['occupied' => true])->orderBy('room_name')->all();

            return Hotel::getDb()->createCommand('SELECT room_name, stay_days FROM hotel ORDER BY room_name ASC')->queryAll();
        });

        /*$rooms_data =  Yii::$app->cache->getOrSet(ROOMS_KEY, function () {
            return $this->getOccupiedRoomsData();
        });*/

        return $this->render('index', [
            'rooms_data' => $rooms_data_using_query_cache,
        ]);
    }

    private function defaultDaysToUpdate() {
        return 0;
    }

    /*private function getOccupiedRoomsData() {
        return Hotel::getDb()->createCommand('SELECT room_name, stay_days FROM hotel WHERE stay_days>0 ORDER BY room_name')->queryAll();
    }*/
}