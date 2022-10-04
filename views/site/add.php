<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['id' => 'add']); ?>

    <?= $form->field($model, 'num1') ?> <!-- can customize label using $form->field($model, 'name')->label('Your Name')-->

    <?= $form->field($model, 'num2') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
<?php if (Yii::$app->session->hasFlash('addDone')): ?>
    <div>
        <p>sum: <?= Html::encode($model->sum) ?></p>
    </div>
<?php endif; ?>

