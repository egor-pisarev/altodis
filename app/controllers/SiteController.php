<?php

namespace app\controllers;

use app\models\OrderForm;
use Yii;
use yii\web\Controller;
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\gallery\api\Gallery;
use yii\bootstrap\ActiveForm;
use yii\web\Response;
use yii\easyii\models\Setting;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGallery()
    {
        $gallery = Gallery::cat('fotoalbom');
        return $this->render('gallery',['photos'=>$gallery->photos()]);
    }

    public function actionPage($slug)
    {
        $page = Page::get($slug);
        return $this->render('page',['page'=>$page]);
    }

    public function actionCatalog()
    {
        if(Yii::$app->request->get('slug')){
            $item = Catalog::get(Yii::$app->request->get('slug'));
            return $this->render('catalog-item',['item'=>$item]);
        }
        $items = Catalog::items();
        return $this->render('catalog-list',['items'=>$items]);
    }

    public function actionOrder()
    {
        $model = new OrderForm();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {

            $result = ActiveForm::validate($model);
            Yii::$app->response->format = Response::FORMAT_JSON;

            if(!empty($result)){
                return $result;
            }

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                if ($model->sendEmail(Setting::get('admin_email'))) {
                    return 'success';
                } else {
                    return 'error';
                }
            }

        }
    }
}