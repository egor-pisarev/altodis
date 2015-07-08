<!-- Navigation start -->
<nav class="navbar navbar-custom <?=isset($this->params['isHome'])?'navbar-transparent':''?> navbar-fixed-top" role="navigation">

    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-logo" href="/"></a>
        </div>
        <div class="header-top">
            <span class="phone">+7 (913) <span>139 46 44</span></span>
            <a class="mail" href="/">altodis@gmail.com</a>
            <a class="callback-btn y-btn hidden-xs" href="#">Заказать обратный звонок</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">

            <?=\yii\bootstrap\Nav::widget([
                'items'=>[
                    ['label'=>'О нас','url'=>'/o-nas'],
                    ['label'=>'Туры','url'=>'/tury'],
                    ['label'=>'Альбом','url'=>'/albom'],
                    ['label'=>'Отзывы','url'=>'/otzyvy'],
                    ['label'=>'Страна Алтай','url'=>'/strana-altai'],
                    ['label'=>'Информация','url'=>'/informatsiya'],
                    ['label'=>'Контакты','url'=>'/kontakty'],
                ],
                'options'=>[
                    'class'=>'nav navbar-nav navbar-right',
                ]
            ])?>
        </div>

    </div>

</nav>
<!-- Navigation end -->