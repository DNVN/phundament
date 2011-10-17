<?php
$this->layout = 'main';
$this->pageTitle=Yii::app()->name . ' - Widget Demo';
$this->breadcrumbs=array(
	'Widgdet Demo',
);
?>
<div class="span-12 container1">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main1', 'varyByRequestParam' => 'view')) ?>
</div>
<div class="span-12 last container2">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main2', 'varyByRequestParam' => 'view')) ?>
</div>
<div class="span-12 container3">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main3', 'varyByRequestParam' => 'view')) ?>
</div>
<div class="span-12 last container4">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main4', 'varyByRequestParam' => 'view')) ?>
</div>

<div class="clearfix"></div>
