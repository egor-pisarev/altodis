<div class="container">
    <h2>Туры</h2>

    <div class="row">
        <div class="col-sm-12">
            <ul id="works-grid" class="works-grid works-grid-gut works-grid-3 works-hover-w">

                <?php foreach($items as $item):?>

                    <li class="work-item illustration webdesign">
                        <a href="/tours/<?=$item->slug?>">
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