<?php
/*
  The first-run wizard will be skipped because Nextcloud will find all the
  required configuration options in this file. This file is automatically
  removed right after it's used.
*/

require(dirname(__FILE__) . "/docker.config.php");

$AUTOCONFIG = $CONFIG;
$AUTOCONFIG['directory'] = $AUTOCONFIG['datadirectory'];
$AUTOCONFIG['dbpass'] = $AUTOCONFIG['dbpassword'];
