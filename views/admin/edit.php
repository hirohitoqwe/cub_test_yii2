<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>
<div>
    <?php
    $form = ActiveForm::begin([
        'action' => \yii\helpers\Url::to(['/admin/update/', 'id' => $oldNews->id])
    ])
    ?>
    <?= $form->field($model, 'news_headline')->textInput(['value' => $oldNews->news_headline]) ?>
    <?= $form->field($model, 'news_text')->textInput(['value' => $oldNews->news_text]) ?>
    <div class="form-group">
        <div>
            <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'create-button']) ?>
        </div>
    </div>
    <?php ActiveForm::end();
    ?>
</div>