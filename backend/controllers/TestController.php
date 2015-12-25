<?php

namespace backend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest1()
    {
        $sum = 5 + 3;
        $name = "shareef lamak";
        $this->actionTest2($name);
        //return $this->render('test1',['sum'=>$sum]);
    }
    public function actionTest2($name=null)
    {
        return $this->render('test2',['name'=>$name]);
    }
}
