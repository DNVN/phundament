<?php
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>Test</h1>

<div class="span-22 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main', 'varyByRequestParam' => 'view')) ?>
</div>