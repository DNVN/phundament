<h1>Index View</h1>

<div class="span-24 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'top', 'varyByRequestParam' => 'view')) ?>
</div>
<div style="height: 10px; clear: both;"></div>
<div class="span-18">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'left', 'varyByRequestParam' => 'view')) ?>
</div>
<div class="span-6 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'right', 'varyByRequestParam' => 'view')) ?>
</div>
