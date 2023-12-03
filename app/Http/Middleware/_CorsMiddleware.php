<?php
//手動で作成したcors設定

namespace App\Http\Middleware;

use Closure;

class CorsMiddleware
{
  public function handle($request, Closure $next)
  {
    return $next($request)
      ->header('Access-Control-Allow-Origin', 'https://takuma432.shop')
      ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
      ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization')
      ->header('Access-Control-Allow-Credentials', "true");
  }
}
