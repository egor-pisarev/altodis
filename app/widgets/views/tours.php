<?php use yii\easyii\modules\catalog\api\Catalog; ?>

<section id="popular-tracks">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Популярные <a href="#">туры</a></h2>
            </div>
        </div>
    </div>
    <ul id="works-grid" class="works-grid works-grid-gut works-grid-3 works-hover-w">

        <?php foreach(Catalog::items(['pagination'=>['pageSize'=>6]]) as $item):?>

        <!-- Portfolio item start -->
        <li class="work-item illustration webdesign">
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

</section>