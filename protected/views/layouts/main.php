<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />

		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
		<![endif]-->

		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/p3.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>

		<?php if (YII_DEBUG)
			EUserFlash::setWarningMessage("Warning: YII_DEBUG set to <i>true</i>, please disable this setting in production mode."); ?>
		<?php $this->widget('ext.p3extensions.widgets.userflash.EUserFlash'); ?>

		<div class="container" id="page">

			<div id="header">
				<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
				<div id="metamenu">
					<div class="languageSelection">
						<?php
						$this->widget('ext.p3extensions.sets.language.P3LanguageDropDown', array('languages' => array('en_us' => 'English', 'de_de' => 'Deutsch')));
						?>
					</div>
					<?php
					$this->widget('zii.widgets.CMenu', array(
						'items' => array(
							array('label' => ucfirst(Yii::app()->user->name)),
							array('label' => 'Profile', 'url' => array('/user/profile'), 'visible' => !Yii::app()->user->isGuest),
							array('label' => 'Upload', 'url' => array('/p3media/import/upload'), 'visible' => Yii::app()->user->checkAccess('P3media.Import.*')), // uncomment this line after installation
							array('label' => 'Administration', 'url' => array('/p3admin'), 'visible' => Yii::app()->user->checkAccess('Admin')), // uncomment this line after installation
							array('label' => 'Login', 'url' => Yii::app()->user->loginUrl, 'visible' => Yii::app()->user->isGuest),
							array('label' => 'Logout', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
						),
					));
					?>
				</div><!-- metamenu -->
			</div><!-- header -->

			<div id="mainmenu">
				<?php
				$this->widget('zii.widgets.CMenu', array(
					'items' => array(
						array('label' => 'Home', 'url' => array('/site/index')),
						array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
						array('label' => 'Contact', 'url' => array('/site/contact')),
						array('label' => 'Wiki', 'url' => array('/wiki')),
						array('label' => 'Widget Demo', 'url' => array('/site/page', 'view' => 'widgets')),
					),
				));
				?>
			</div><!-- mainmenu -->
			<?php if (isset($this->breadcrumbs)): ?>
				<?php
				$this->widget('zii.widgets.CBreadcrumbs', array(
					'links' => $this->breadcrumbs,
				));
				?><!-- breadcrumbs -->
			<?php endif ?>

			<?php echo $content; ?>

			<div id="footer">
				Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
				All Rights Reserved.<br/>
				<?php echo CHtml::link("Phundament 3", "http://phundament.com"); ?><br/>
				<?php echo Yii::powered(); ?>
			</div><!-- footer -->

		</div><!-- page -->

	</body>
</html>