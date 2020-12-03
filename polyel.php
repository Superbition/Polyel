#!/usr/bin/env php

<?php

define('APP_DIR', __DIR__);

require APP_DIR . '/vendor/superbition/polyel-framework/console-bootstrap.php';

$kernel = Polyel::newConsoleKernel();

$status = $kernel->process(new Polyel\Console\Input($argv, $argc));

exit($status);