<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\SANEBridge\AppInfo\Application::APP_ID, OCA\SANEBridge\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\SANEBridge\AppInfo\Application::APP_ID, OCA\SANEBridge\AppInfo\Application::APP_ID . '-main');

?>

<div id="sanebridge"></div>
