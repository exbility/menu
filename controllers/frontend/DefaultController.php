<?php

namespace exbility\menu\controllers\frontend;


class DefaultController extends \exbility\base\controllers\backend\BaseController
{
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
