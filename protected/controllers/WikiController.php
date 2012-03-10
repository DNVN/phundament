<?php

// This is just a demo controller

Yii::import('p3widgets.models.*');

class WikiController extends Controller {

	public function actionIndex() {
		Yii::app()->returnUrl; // TODO: component has to be called, preload does not work

		$criteria = new CDbCriteria;
		$criteria->condition = 'controllerId = :controllerId AND actionName = :actionName AND requestParam != :universalValue';
		$criteria->params = array(':controllerId' => 'wiki', ':actionName' => 'index', ':universalValue' => P3WidgetContainer::UNIVERSAL_VALUE);
		$criteria->order = 'requestParam';
		$criteria->group = 'requestParam';
		$models = Widget::model()->findAll($criteria);
		$items = array();
		foreach ($models AS $model) {
			$items[] = array(
				'label' => ($model->requestParam) ? $model->requestParam : 'Home',
				'icon' => ($model->requestParam)?'book':'home',
				'url' => array('/wiki', 'page' => $model->requestParam));
		}

		$this->render('index', array('items' => $items));
	}

}