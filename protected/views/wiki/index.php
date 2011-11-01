<?php
$this->layout = "//layouts/main";
$this->breadcrumbs = array(
	'Wiki',
);
?>
	

<div class="span-4 border">
<h2>Navigation</h2>
<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>$items)); ?>
</div>
<div class="span-20 last">
<h1><?php echo $this->id . '/' . $this->action->id.((isset($_GET['page']))?'/'.$_GET['page']:''); ?></h1>
<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main', 'varyByRequestParam' => 'page')) ?>
</div>

<div class="clearfix"></div>