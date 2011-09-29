<?php $this->pageTitle = Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

<p>For more details on how to further develop this application, please visit <a href="http://www.phundament.com/">our website</a>.</p>

<div class="span-22 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main1')) ?>
</div>
<div style="height: 20px; clear: both;"></div>
<div class="span-11">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main2')) ?>
</div>
<div class="span-11 last">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main3')) ?>
</div>
<div style="height: 20px; clear: both;"></div>
<div class="span-16">
	<?php $this->widget('p3widgets.components.P3WidgetContainer', array('id' => 'main4')) ?>
</div>