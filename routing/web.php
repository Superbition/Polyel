<?php

use Polyel\Router\Facade\Route;

Route::get("/", "WelcomeController@welcome");

Route::addAuthRoutes();

Route::get("/admin", "WelcomeController@welcome")->middleware(['Auth:web', 'ConfirmPassword', 'IsVerified']);