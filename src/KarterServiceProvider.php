<?php

namespace Starts\Karter;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\SplFileInfo;

class KarterServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'karter');
        $this->loadViewComponentsAs('karter',
            collect(File::allFiles(__DIR__ . '/Components/')
            )->map(fn (SplFileInfo $file) => "Starts\\Karter\\Components\\{$file->getFilenameWithoutExtension()}")
                ->toArray());

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/karter'),
        ], 'karter');
    }
}
