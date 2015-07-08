<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\themes\altodis\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ThemeAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/altodis/web';
    public $css = [
        'css/bootstrap.min.css',
        'css/main.css',
        'css/chosen.css',
        'css/simpletextrotator.css',
        'css/et-line-font.css',
        'css/magnific-popup.css',
        'css/flexslider.css',
        'css/owl.carousel.css',
        'css/animate.css',
        'css/style.css',
        'http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700,600',
        'http://fonts.googleapis.com/css?family=Kaushan+Script',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
    ];
    public $js = [
        'js/appear.js',
        'js/bootstrap.min.js',
        'js/chosen.jquery.min.js',
     //   'js/common.js',
     //   'js/contact.js',
        'js/custom.js',
   //     'js/gmaps.js',
        'js/imagesloaded.pkgd.js',
        'js/isotope.pkgd.min.js',
        'js/jqBootstrapValidation.js',
        'js/jquery.fitvids.js',
        'js/jquery.flexslider-min.js',
     //   'js/js/js/jquery.magnific-popup.min.js',
        'js/jquery.mb.YTPlayer.min.js',
        'js/jquery.simple-text-rotator.min.js',
    //    'js/jquery-2.1.3.min.js',
    //    'js/main.js',
        'js/owl.carousel.min.js',
        'js/smoothscroll.js',
 //       'js/stats.js',
  //      'js/util.js',
        'js/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
