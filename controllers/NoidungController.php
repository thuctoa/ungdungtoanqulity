<?php

namespace app\controllers;

class NoidungController extends \yii\web\Controller
{
    public function beforeAction($action) {
            $this->enableCsrfValidation = false;
            return parent::beforeAction($action);
    }
    public function actionLythuyet()
    {
        $loai = '';
        if(isset($_GET['loai'])){
            $loai='lythuyet-'.$_GET['loai'];
        }
        return $this->render('lythuyet',[
            'loai'=>$loai,
        ]);
    }
    public function actionThuattoan()
    {
        $loai = '';
        if(isset($_GET['loai'])){
            $loai='thuattoan-'.$_GET['loai'];
        }
        return $this->render('thuattoan',[
            'loai'=>$loai,
        ]);
    }
    public function actionDauvao()
    {
        $loai = '';
        if(isset($_GET['loai'])){
            $loai=$_GET['loai'];
        }
        return $this->render('dauvao',[
            'loai'=>$loai,
        ]);
    }
}
