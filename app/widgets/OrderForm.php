<?php
/**
 * Created by JetBrains PhpStorm.
 * User: egor
 * Date: 07.07.15
 * Time: 15:08
 * To change this template use File | Settings | File Templates.
 */

namespace app\widgets;

use Yii;
use yii\base\Widget;
use yii\easyii\models\Setting;
use app\models\OrderForm as Form;
use yii\bootstrap\ActiveForm;

class OrderForm extends Widget {

    public function run()
    {
        $this->view->registerJs('
        $("#order-form-form").submit(function(){
             var $form = $(this);
             $.ajax({
                   url: "/site/order",
                   type: "POST",
                   data: $form.serialize(),
                   success: function(data){
                       if(data=="success"){
                            $(".form-control").removeClass("has-error");
                            alert("Ваш заказ отправлен. Наш менеджер свяжется с Вами в ближайшее время");
                       }else{
                            $.each(data, function(index,item){
                                $("#"+index).addClass("has-error");
                            });
                       }
                   }
             });
             return false;
        });
        ');

        $model = new Form;

        if($model->load(Yii::$app->request->post())){
            $model->validate();
        }

        return $this->render('order-form',['model'=>$model]);
    }


}