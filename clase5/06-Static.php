<?php

	require_once('Hijo.php');

	Hijo::$abuelos = 4;
	echo Hijo::$abuelos . PHP_EOL;

	Hijo::saludar();