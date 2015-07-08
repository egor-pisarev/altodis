<?php
/**
 * Created by JetBrains PhpStorm.
 * User: egor
 * Date: 07.07.15
 * Time: 15:22
 * To change this template use File | Settings | File Templates.
 */

namespace app\widgets;


use yii\bootstrap\Widget;

class Tours extends Widget{

    public function run()
    {
        return $this->render('tours');
    }
}