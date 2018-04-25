<?php
use exbility\theme\helpers\Html;
use exbility\theme\widgets\Portlet;


$this->title = 'Update Sample';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;


$this->params['pageTitle'] 	= $this->title;
$this->params['pageDesc'] 	= 'describes the sample features';

$data['model']          = $model;
$data['uploadImage']    = $uploadImage;
$formView	            = $this->render('_form',$data);

Portlet::begin(['title' => $this->title, 'icon' => 'glyphicon glyphicon-cog']);

    echo $this->render('update', ['formView' => $formView]);

Portlet::end();