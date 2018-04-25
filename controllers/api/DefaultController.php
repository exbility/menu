<?php

namespace exbility\menu\controllers\api;


class DefaultController extends \exbility\base\controllers\api\BaseController
{
    public function actionIndex(){
        return ['status' => 1, 'action' => 'index','controller' => 'default'];
    }

}