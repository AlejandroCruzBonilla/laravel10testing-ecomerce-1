<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class Helpers
{
  public static function getRoutesByStarting($start = '')
  {
    $list = Route::getRoutes()->getRoutesByName();
    if (empty($start)) {
      return $list;
    }

    $routes = [];
    foreach ($list as $name => $route) {
      if (\Illuminate\Support\Str::startsWith($name, $start)) {
        $routes[$name] = $route;
      }
    }

    return $routes;
  }
}
