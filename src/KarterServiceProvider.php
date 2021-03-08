<?php

namespace Starts\Karter;

use Illuminate\Support\ServiceProvider;
use Starts\Karter\Components\Form;

class KarterServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'karter');
        $this->loadViewComponentsAs('karter', [
            Form::class,
        ]);

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/karter'),
        ], 'karter');
    }
}
