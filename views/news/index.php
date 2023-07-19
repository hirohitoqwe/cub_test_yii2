<?php
use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
?>

<div class="news-index">
    <?php foreach ($newss as $news): ?>
        <div>
            <h3><?= $news->news_headline ?></h3>
            <div class="text-bg-info">
                <?= $news->news_text ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
if (Yii::$app->authManager->checkAccess(Yii::$app->user->id, 'admin')) {
    ?>
    <div>
        <?php $form = ActiveForm::begin([
            'action' => '/admin/create'
        ])
        ?>
        <?= $form->field($model, 'news_headline') ?>
        <?= $form->field($model, 'news_text') ?>
        <div class="form-group">
            <div>
                <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'create-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end();
        ?>
    </div>
<?php }
?>