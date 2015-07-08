<?php
/**
 * Created by JetBrains PhpStorm.
 * User: egor
 * Date: 08.07.15
 * Time: 12:45
 * To change this template use File | Settings | File Templates.
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\easyii\models\Setting;

class OrderForm extends Model {

    public $type;
    public $startDate;
    public $endDate;
    public $amount;
    public $places;
    public $otherPlaces;
    public $name;
    public $phone;
    public $email;

    public function getToursTypes()
    {
        return explode(',',Setting::get('tours-types'));
    }

    public function getPlacesTypes()
    {
        return explode(',',Setting::get('places-types'));
    }

    public function attributeLabels()
    {
        return [
            'type'=>'Тип тура',
            'amount'=>'Количество человек',
            'places'=>'Что хотель бы посетить',
            'startDate'=>'Дата начала тура',
            'endDate'=>'Дата окончания тура',
            'name'=>'Имя',
            'phone'=>'Телефон',
            'email'=>'E-mail',
        ];
    }

    public function rules()
    {
        return [
            [['name','type','startDate','endDate','amount','places','phone','email'],'required'],
        ];
    }

    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}