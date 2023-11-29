<?php
//手動cors設定

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
  public function handle($request, Closure $next)
  {
    return $next($request)
      ->header('Access-Control-Allow-Origin', 'http://172.20.176.1:5173')
      ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
      ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
  }
}
