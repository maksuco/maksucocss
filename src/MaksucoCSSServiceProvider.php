<?php

namespace Maksuco\MaksucoCSS;

use Illuminate\Support\ServiceProvider;

class MaksucoCSSServiceProvider extends ServiceProvider
{

    protected $listen = [
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      if(config('maksucocss.publish_path') == null) {
        $this->publishes([
          __DIR__ . '/config.php' => config_path('maksucocss.php'),
        ]);
      }

      $publish_path = config('maksucocss.publish_path') ?? 'maksucocss/';

      $this->publishes([
        dirname(__DIR__, 1) . '/public/assets/fontawesome/' => public_path($publish_path.'fontawesome'),
        dirname(__DIR__, 1) . '/public/assets/packages/' => public_path($publish_path.'packages'),
      ]);
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
