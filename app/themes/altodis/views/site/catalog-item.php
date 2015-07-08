<?php use yii\easyii\modules\catalog\api\Catalog; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <h2><?= $item->title ?></h2>

            <div class="tabs"></div>
            <div class="region region-content">
                <div class="block block-system" id="block-system-main">


                    <div class="content">
                        <div typeof="sioc:Item foaf:Document" about="/node/8"
                             class="node node-tour node-promoted clearfix" id="node-8">


                            <span class="rdf-meta element-hidden" content="Алтайская одиссея"
                                  property="dc:title"></span><span class="rdf-meta element-hidden"
                                                                   datatype="xsd:integer" content="0"
                                                                   property="sioc:num_replies"></span>

                            <div class="content">
                                <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                    <div class="field-items">
                                        <div property="content:encoded" class="field-item even">
                                            <?= $item->description ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-sm-3">
            <h3 class="sidebar-title">Популярные туры</h3>
            <ul id="works-grid" class="works-grid works-grid-gut works-hover-w">

                <?php foreach(Catalog::items(['pagination'=>['pageSize'=>6]]) as $item):?>

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