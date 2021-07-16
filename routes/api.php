<?php

use App\Http\Controllers\Api\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::resource('cliente', ClienteController::class);
