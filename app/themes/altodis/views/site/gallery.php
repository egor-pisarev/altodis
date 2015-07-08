<?php
use yii\bootstrap\Html;
use yii\easyii\modules\gallery\api\Gallery;

?>
<div class="container">
    <h2>Фото альбом</h2>

    <div class="row">
        <?php foreach($photos as $photo):?>
            <div class="col-sm-3">
                <div class="image-container">
                    <?=$photo->box(400,300)?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?=Gallery::plugin();?>