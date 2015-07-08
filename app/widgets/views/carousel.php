<?php
use yii\easyii\modules\carousel\api\Carousel;

?>

<!-- Home start -->
<section id="home" class="home-section home-parallax home-fade home-full-height" style="height: 911px;">
    <div class="hero-slider">
        <ul class="slides">
            <?php foreach(Carousel::items() as $item):?>
                <li class="bg-dark-30 bg-dark" style="background: url(<?=$item->image?>);">
                    <div class="hs-caption">
                        <div class="caption-content">
                            <a href="<?=$item->link?>" class="section-scroll"><?=$item->title?></a>
                            <p class="lead"><?=$item->text?></p>

                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="top-shadow"></div>
</section>

<!-- Home end -->