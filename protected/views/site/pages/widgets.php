<?php
$this->pageTitle=Yii::app()->name . ' - Widget Demo';
$this->breadcrumbs=array(
	'Widgdet Demo',
);
?>

<h1>Phundament 3 Widget Demo</i></h1>

<p>Congratulations! You have successfully created your application.</p>

<p>You have to <b>login with editor /editor</b> to change to content of this page.</p>

<p>Hover a container and click on the [+] plus sign to add a widget.</p>

<p>For more details on how to further develop this application, please visit <a href="http://www.phundament.com/">our website</a>.</p>

<div class="span-24 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'top', 'varyByRequestParam' => 'view')) ?>
</div>
<div style="height: 20px; clear: both;"></div>
<div class="span-12">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'left', 'varyByRequestParam' => 'view')) ?>
</div>
<div class="span-12 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'right', 'varyByRequestParam' => 'view')) ?>
</div>
