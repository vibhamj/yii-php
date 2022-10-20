<?php
use yii\helpers\Html;
?>
<h1>Hotel Website</h1>

<h2>Rooms</h2>
<ul>
<li>
    <b>Room </b> |
    
    <b>Days of Stay</b>
</li>
<?php foreach ($rooms_data as $room): ?>
    <li>
        <?= Html::encode("{$room["room_name"]} |")?>
        <?= $room["stay_days"] ?>
    </li>
<?php endforeach; ?>
</ul>

<?php $form = ActiveForm::begin(['id' => 'hotel-form']); ?>
    <?= $form->field($model, 'room_name_to_checkin') ?>
    <?= $form->field($model, 'room_name_to_checkout') ?>
    <div class="form-group1">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'save-button']) ?>
     </div>
     <div class="form-group2">
        <?= Html::submitButton('New Day', ['class' => 'btn btn-primary', 'name' => 'new-day-button']) ?>
     </div>
     <div class="form-group3">
        Number of days since last update to database: <?= Html::encode("$days_to_update_to_db") ?>
        <?= Html::submitButton('Update Database', ['class' => 'btn btn-primary', 'name' => 'update-db-button']) ?>
     </div>
<?php ActiveForm::end(); ?>

</ul>

