<?php


use exbility\theme\widgets\CheckBoxColumn;
use exbility\theme\widgets\Portlet;
use exbility\theme\widgets\GridView;
use exbility\theme\helpers\Html;
use exbility\theme\widgets\ActionColumn;


$this->title 	= 'Samples Manage';
$data['title'] 	= $this->title;
$this->params['breadcrumbs'][] = $this->title;

$data['GridView'] = GridView::widget([
	'dataProvider' => $dataProvider,
	'filterModel' => $searchModel,
	'id'=> 'ebookGrid',
	'columns' => [
		['class' => CheckboxColumn::className()],
			'id',
            'title',
            'description:ntext',
            [
                'attribute' => 'picture',
                'format' => 'html',
                'label' => 'Picture',
                'value' => function ($data) {
                    return Html::img('/data/samples/' . $data['picture'],
                        ['width' => '60px']);
                },
            ],
		['class' => ActionColumn::className()],
		 
	],
]);


Portlet::begin(['title' => $this->title, 'icon' => 'glyphicon glyphicon-cog']);

    echo $this->render('manage',  $data);

Portlet::end(); 
