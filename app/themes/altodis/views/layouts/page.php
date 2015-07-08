<?php use yii\easyii\modules\catalog\api\Catalog;?>
<?php $this->beginContent('@app/themes/altodis/views/layouts/main.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?=$content?>
        </div>
        <div class="col-sm-3">
            <h3 class="sidebar-title">Популярные туры</h3>
            <ul id="works-grid" class="works-grid works-grid-gut works-hover-w">

                <?php foreach(Catalog::items(['pagination'=>['pageSize'=>3]]) as $item):?>

                    <!-- Portfolio item start -->
                    <li class="illustration webdesign">
                        <a href="/site/catalog?slug=<?=$item->slug?>">
                            <div class="title">
                                <?=$item->title?>
                            </div>
                            <div class="work-image">
                                <img src="<?=$item->image?>" alt="">
                            </div>
                            <div class="work-caption">
                                <p>
                                    <?=mb_substr($item->description,0,300)?>...
                                </p>
                                <p>
                                <div class="y-btn" href="#">Заказать</div>
                                </p>
                            </div>
                        </a>
                    </li>

                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php $this->endContent(); ?>


