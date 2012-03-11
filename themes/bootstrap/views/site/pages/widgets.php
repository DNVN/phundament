<?php
$this->pageTitle = Yii::app()->name . ' - Widget Demo';
$this->breadcrumbs = array(
	'Widgdet Demo',
);
?>
<div class="row">
	<div class="span12">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'top', 'varyByRequestParam' => 'view')) ?>
	</div>
</div>

<div class="row">
	<div class="span6">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'left', 'varyByRequestParam' => 'view')) ?>
	</div>
	<div class="span6">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'right', 'varyByRequestParam' => 'view')) ?>
	</div>
</div>