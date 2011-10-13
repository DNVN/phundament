<?php $this->pageTitle = Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your application.</p>

<p>You have to <b>login as admin</b> to change to content of this page.</p>

<p>Hover a container and click on the [+] plus sign to add a widget.</p>

<p>For more details on how to further develop this application, please visit <a href="http://www.phundament.com/">our website</a>.</p>

<div class="span-23 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main1', 'varyByRequestParam' => 'view')) ?>
</div>
<div style="height: 20px; clear: both;"></div>
<div class="span-11 append-1">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main2', 'varyByRequestParam' => 'view')) ?>
</div>
<div class="span-11 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main3', 'varyByRequestParam' => 'view')) ?>
</div>
