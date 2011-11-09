<?php
$this->pageTitle=Yii::app()->name . ' - Widget Demo';
$this->breadcrumbs=array(
	'Widgdet Demo',
);
?>
<div class="span-24 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'top', 'varyByRequestParam' => 'view')) ?>
</div>
<div style="height: 10px; clear: both;"></div>
<div class="span-12">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'left', 'varyByRequestParam' => 'view')) ?>
</div>
<div class="span-12 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'right', 'varyByRequestParam' => 'view')) ?>
</div>
