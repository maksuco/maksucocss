<?php

namespace Maksuco\MaksucoCSS;

use Illuminate\Support\ServiceProvider;

class MaksucoCSSProvider extends ServiceProvider
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

      if(config('maksucocss.publish_path') !== null) {
        $this->publishes([
          __DIR__ . '/src/config.php' => config_path('maksucocss.php'),
        ]);
      }

      $publish_path = config('maksucocss.publish_path') ?? 'maksucocss/';

      $this->publishes([
        __DIR__ . '/public/assets/fontawesome/' => public_path($publish_path.'fontawesome'),
        __DIR__ . '/public/assets/packages/' => public_path($publish_path.'packages'),
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
