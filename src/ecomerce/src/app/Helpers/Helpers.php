<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class Helpers
{
  public static function getJsonRoutesByStarting($start = '')
  {
    $list = Route::getRoutes()->getRoutesByName();
    if (empty($start)) {
      return $list;
    }

    $routes = [];
    foreach ($list as $name => $route) {
      if (\Illuminate\Support\Str::startsWith($name, $start)) {
        $name = self::cleanRouteName($name);
        $routes[] = [
          "name" => $name,
          "uri" => $route->uri,
        ];
      }
    }

    return json_encode($routes);
  }

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

  public static function cleanRouteName($name): string {

    return $name = ucfirst(preg_replace('/^\w+.(\w+).\w+$/', '${1}', $name));
  }
}
