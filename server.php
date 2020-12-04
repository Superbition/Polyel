<?php

define("APP_DIR", __DIR__);

require APP_DIR . "/vendor/superbition/polyel-framework/bootstrap.php";

$server = Polyel::call(Polyel\Http\Server::class);

$server->boot();

$server->registerReactors();

$server->run();