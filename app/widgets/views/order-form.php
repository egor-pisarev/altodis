<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>
<section id="order-form">
    <?php $form = ActiveForm::begin([
        'id' => 'order-form-form',
        'action'=>'/site/order',
        'method'=>'post',
        'fieldConfig' => [
            'template' => "{beginWrapper}{label}\n{input}\n{hint}\n{endWrapper}",
        ],
    ]); ?>
    <div class="container">
            <h2>Заказать индивидуальный тур</h2>
            <?=$form->errorSummary($model)?>
            <div class="row">
                <div class="col-sm-3 custom">
                    <div class="input-group">
                        <?=$form->field($model,'type')->dropDownList($model->toursTypes)?>
                    </div>
                    <div class="input-group">
                        <label>Стоимость на человека</label>
                        <input type="text" class="form-control min" placeholder="от"/>
                        <input type="text" class="form-control max" placeholder="до" />
                    </div>
                </div>
                <div class="col-sm-3 custom">
                    <div class="input-group">
                        <label>Желаемые даты</label>
                        <?=Html::activeTextInput($model,'startDate',['placeholder'=>'c','class'=>'form-control min'])?>
                        <?=Html::activeTextInput($model,'endDate',['placeholder'=>'по','class'=>'form-control max'])?>
                    </div>
                    <div class="input-group">
                        <?=$form->field($model,'amount')->textInput()?>
                    </div>
                </div>
                <div class="col-sm-4 custom">
                    <div class="input-group extra">
                        <?=$form->field($model,'places')->listBox($model->placesTypes,['class'=>'chosen','multiple'=>true])?>
                        <?=Html::activeTextInput($model,'otherPlaces',['placeholder'=>'Другой вариант (указать)','class'=>'form-control'])?>
                    </div>
                    <div class="input-group">
                        <a class="clear-btn" href="#">Сбросить</a>
                    </div>
                </div>
                <div class="col-sm-3 custom">
                    <div class="input-group">
                        <label>контактная информация</label>
                        <?=Html::activeTextInput($model,'name',['placeholder'=>'имя','class'=>'form-control'])?>
                        <?=Html::activeTextInput($model,'phone',['placeholder'=>'телефон','class'=>'form-control'])?>
                        <?=Html::activeTextInput($model,'email',['placeholder'=>'e-mail','class'=>'form-control'])?>
                        <input type="submit" class="y-btn" value="отправить заказ"/>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>