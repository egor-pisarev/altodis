<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\easyii\modules\catalog\api\Catalog;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\gallery\api\Gallery;
use yii\bootstrap\ActiveForm;
use yii\web\Response;
use yii\easyii\models\Setting;
use app\models\OrderForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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

    public function actionContact()
    {
        $this->layout = 'main';

        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionNode($id)
    {
        $redirects = [
            15=>['site/page','slug'=>'o-nas'],
            24=>['site/gallery'],
            20=>['site/contact'],
            19=>['site/page','slug'=>'informatsiya'],
            18=>['site/page','slug'=>'strana-altai'],
        ];

        if(!isset($redirects[$id])){
            $this->redirect('/');
        }

        $this->redirect($redirects[$id]);
    }
}