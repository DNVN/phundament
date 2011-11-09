<?php
$page = ((isset($_GET['page'])) ? $_GET['page'] : '');
$this->layout = "//layouts/main";
$this->breadcrumbs = array(
	'Wiki' => array('/wiki'),
	$page
);
?>


<div class="span-24 last">
	<h1><?php echo $this->id . '/' . $page; ?></h1>
	<div class="wiki-navigation">
		<?php $this->widget('zii.widgets.CMenu', array(
			'items' => $items)); ?>
	</div>
</div>

<div class="span-24 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main', 'varyByRequestParam' => 'page')) ?>
</div>

<div class="clearfix"></div>