<?php
use exbility\theme\helpers\Html;
use exbility\theme\widgets\Portlet;

$this->title = 'Index Sample';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;


Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);

echo $this->render('index');

Portlet::end();



