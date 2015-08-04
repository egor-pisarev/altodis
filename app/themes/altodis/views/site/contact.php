<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <?php else: ?>

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-6">
            <ul class="lead" style="list-style: none; padding: 0px;">
                <li><i class="fa fa-map-marker"></i> Барнаул, Россия, Красноармейский пр. 53/г </li>
                <li><i class="fa fa-phone"></i> +7 (913) 139 46 44</li>
                <li><i class="fa fa-envelope-o"></i> altodis@gmail.com</li>
            </ul>

            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=FmJ2Q4mHwfBTCeCJ-JYJocYzX7DIuDUl&width=600&height=450"></script>
        </div>

    </div>

</div>




