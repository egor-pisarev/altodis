<?php
/**
 * Created by JetBrains PhpStorm.
 * User: egor
 * Date: 07.07.15
 * Time: 15:05
 * To change this template use File | Settings | File Templates.
 */


namespace app\widgets;

class Carousel extends \yii\bootstrap\Widget{

    public function run()
    {
        return $this->render('carousel');
    }

}