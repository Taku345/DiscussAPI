<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    if (config('app.env') === 'local') {
      $this->app['request']->server->set('HTTPS', true);
    }
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(UrlGenerator $url): void
  {
    if (config('app.env') === 'local') {
      $this->app['request']->server->set('HTTPS', true);
    }
  }
}
