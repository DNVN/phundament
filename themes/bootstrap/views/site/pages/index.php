<div class="row">
	<div class="span12">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'top', 'varyByRequestParam' => 'view')) ?>
	</div>	
	<div class="span9">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'left', 'varyByRequestParam' => 'view')) ?>
	</div>
	<div class="span3">
		<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'right', 'varyByRequestParam' => 'view')) ?>
	</div>
</div>