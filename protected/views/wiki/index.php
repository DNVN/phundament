<?php
$this->breadcrumbs = array(
	'Wiki',
);
?>
	
<h1><?php echo $this->id . '/' . $this->action->id.((isset($_GET['page']))?'/'.$_GET['page']:''); ?></h1>

<div class="span-6">
<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>$items)); ?>
</div>
<div class="span-17 last">
<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main', 'varyByRequestParam' => 'page')) ?>
</div>