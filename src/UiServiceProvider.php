<?php

namespace Honda\Ui;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\SplFileInfo;

class UiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        $this->loadViewComponentsAs('ui',
            collect(File::allFiles(__DIR__ . '/Components/')
            )->map(fn (SplFileInfo $file) => "Honda\\Ui\\Components\\{$file->getFilenameWithoutExtension()}")
                ->toArray());

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
        ], 'ui');
    }
}
