<?php
/**
 * Created by PhpStorm.
 * User: BC
 * Date: 07.09.2015
 * Time: 11:23
 * @var $user \app\models\User
 */
use yii\helpers\Html;

echo 'Привет '.Html::encode($user->username).'. ';
echo Html::a('Для активации аккаунта перейдите по ссылке.',
    Yii::$app->urlManager->createAbsoluteUrl(
        [
            '/main/activate-account',
            'key' => $user->secret_key
        ]
    ));