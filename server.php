<?php

echo "
  _____      _            _        __   ___  
 |  __ \    | |          | |      /_ | / _ \ 
 | |__) |__ | |_   _  ___| | __   _| || | | |
 |  ___/ _ \| | | | |/ _ \ | \ \ / / || | | |
 | |  | (_) | | |_| |  __/ |  \ V /| || |_| |
 |_|   \___/|_|\__, |\___|_|   \_/ |_(_)___/ 
                __/ |                        
               |___/                         

";

echo "Creating Root Directory constant\n";
define("APP_DIR", __DIR__);

require __DIR__ . "/vendor/superbition/polyel-framework/bootstrap.php";

$server = Polyel::call(Polyel\Http\Server::class);

$server->boot();

$server->registerReactors();

$server->run();