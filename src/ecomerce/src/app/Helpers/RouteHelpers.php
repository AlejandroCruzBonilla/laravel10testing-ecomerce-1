<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class RouteHelpers
{
  public static function getRoutesByPrefix($prefix = '')
  {
    $list = Route::getRoutes()->getRoutesByName();
    if (empty($prefix)) {
      return $list;
    }

    $routes = [];
    foreach ($list as $name => $route) {
      if (Str::startsWith($name, $prefix)) {
        $routes[$name] = $route;
      }
    }

    return $routes;
  }

  public static function getRoutesBySuffix($suffix = '')
  {
    $list = Route::getRoutes()->getRoutesByName();
    if (empty($suffix)) {
      return $list;
    }

    $routes = [];
    foreach ($list as $name => $route) {
      if (Str::endWith($name, $suffix)) {
        $routes[$name] = $route;
      }
    }

    return $routes;
  }

  public static function getRoutesByPrefix_Suffix($prefix, $suffix)
  {
    $list = Route::getRoutes()->getRoutesByName();

    $routes = [];
    foreach ($list as $name => $route) {
      if (
        Str::startsWith($name, $prefix) &&
        Str::endsWith($name, $suffix)
      ) {
        $routes[$name] = $route;
      }
    }

    return $routes;
  }

  public static function cleanRouteName($name): string {
    return $name = ucfirst(preg_replace('/^\w+.(\w+).\w+$/', '${1}', $name));
  }
}
