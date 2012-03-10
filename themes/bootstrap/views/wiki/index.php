
<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'hero', 'varyByRequestParam' => 'view')) ?>

<!-- Example row of columns -->
<div class="row">
	<div class="span4">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'left', 'varyByRequestParam' => 'view')) ?>
	</div>
	<div class="span4">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'middle', 'varyByRequestParam' => 'view')) ?>
	</div>
	<div class="span4">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'right', 'varyByRequestParam' => 'view')) ?>
	</div>
</div>

<div class="row">
	<div class="span12">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main', 'varyByRequestParam' => 'view')) ?>
	</div>
</div>
