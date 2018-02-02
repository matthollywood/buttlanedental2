<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

        public function actionCareplan()
    {
        return $this->render('careplan');
    }
    
        public function actionContactus()
    {
        return $this->render('contactus');
    }
    
        public function actionEmergencies()
    {
        return $this->render('emergencies');
    }
    
        public function actionPicturegallery()
    {
        return $this->render('picturegallery');
    }
    
        public function actionThepractice()
    {
        return $this->render('thepractice');
    }
    
            public function actionTreatments()
    {
        return $this->render('treatments');
    }
    
                public function actionDentists()
    {
        return $this->render('dentists');
    }
                    public function actionHygenists()
    {
        return $this->render('hygenists');
    }
                    public function actionDentalnurses()
    {
        return $this->render('dentalnurses');
    }
                    public function actionReception()
    {
        return $this->render('reception');
    }
                        public function actionFacilitiesandaccess()
    {
        return $this->render('facilitiesandaccess');
    }
}
