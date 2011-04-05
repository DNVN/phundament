<?php

return array(
	'import' => array(
		'application.modules.rights.*',
		'application.modules.rights.components.*', // Correct paths if necessary.
	),
	'components' => array(
		'user' => array(
			'class' => 'RWebUser', // Allows super users access implicitly.
		),
		'authManager' => array(
			'class' => 'RDbAuthManager', // Provides support authorization item sorting.
		),
	),
	'modules' => array(
		'rights' => array(
			#'install' => true, // Enables the installer.
		),
	),
)
?>
