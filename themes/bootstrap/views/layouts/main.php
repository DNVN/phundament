<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		

		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
		</style>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<link href="css/blueprint-bootstrap.css" rel="stylesheet">

		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	</head>

	<body>

		<?php
		$this->widget('ext.yii-bootstrap.widgets.BootNavbar', array(
			//'fluid' => true,
			'collapse' => true,
			'items' => array(
				array(
					'class' => 'bootstrap.widgets.BootMenu',
					'items' => array(
						array('label' => 'Home', 'url' => array('/site/index')),
						array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
						array('label' => 'Contact', 'url' => array('/site/contact')),
						array('label' => 'Wiki', 'url' => array('/wiki')),
						array('label' => 'Widget Demo', 'url' => array('/site/page', 'view' => 'widgets')),
					),
				),
//								'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',

				array(
					'class' => 'bootstrap.widgets.BootMenu',
					'htmlOptions' => array('class' => 'pull-right'),
					'items' => array(
						array(
							'label' => Yii::app()->language, 'url' => '#',
							'items' => array(
								array('label' => 'Choose Language'),
								array('label' => 'English', 'url' => array('/', 'lang' => 'en')),
								array('label' => 'Deutsch', 'url' => array('/', 'lang' => 'de')),
								array('label' => 'Français', 'url' => array('/', 'lang' => 'fr')),
								array('label' => 'Русски', 'url' => array('/', 'lang' => 'ru')
								),
							)
						)
					)
				),
				array(
					'class' => 'bootstrap.widgets.BootMenu',
					'htmlOptions' => array('class' => 'pull-right'),
					'items' => array(
						array('label' => 'Phundament 3', 'url' => '#', 'visible' => !Yii::app()->user->isGuest, 'items' => array(
								array('label' => 'Phundament 3.1-dev'),
								array('label' => 'Backend', 'url' => array('/p3admin'), 'visible' => Yii::app()->user->checkAccess('Admin')),
								array('label' => 'Upload Media', 'url' => array('/p3media/import/upload'), 'visible' => Yii::app()->user->checkAccess('P3media.Import.*')),
								'---',
								array('label' => 'Visit Phundament Website', 'url' => 'http://phundament.com', 'visible' => Yii::app()->user->checkAccess('Admin')),
						)),
						array('label' => ucfirst(Yii::app()->user->name), 'visible' => !Yii::app()->user->isGuest, 'items' => array(
								array('label' => 'User Settings'),
								array('label' => 'Profile', 'url' => array('/user/profile'), 'visible' => !Yii::app()->user->isGuest),
								'---',
								array('label' => 'Logout', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
						)),
						array('label' => 'Login', 'url' => Yii::app()->user->loginUrl, 'visible' => Yii::app()->user->isGuest),
					),
				),
			))
		);
		?>

		<div class="container">

			<div class="subwrapper">
				<?php echo $content; ?>
			</div>

			<script type="text/javascript">
				// blueprint to bootstrap hotfix
				$(':not(.subwrapper:has(.row))').addClass('row');
				$('.subwrapper:has(.form:has(.row))').addClass('row');
				$(':not(.subwrapper:has([class^=span-]))').removeClass('row');
				//$('div:first-child[class^=span-]').addClass('first');
			</script>




			<hr>

			<footer>
				<p>&copy; Company 2012 | powered by <a href="http://phundament.com">Phundament 3</a></p>
			</footer>

		</div> <!-- /container -->

	</body>
</html>