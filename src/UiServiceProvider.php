<?php

namespace Honda\Ui;

use Honda\Ui\View\Components\Button;
use Honda\Ui\View\Components\Button\Circular;
use Honda\Ui\View\Components\Button\Group;
use Honda\Ui\View\Components\Button\Secondary;
use Honda\Ui\View\Components\Button\White;
use Honda\Ui\View\Components\Checkbox;
use Honda\Ui\View\Components\CurrentYear;
use Honda\Ui\View\Components\Form;
use Honda\Ui\View\Components\Input;
use Honda\Ui\View\Components\Markdown;
use Honda\Ui\View\Components\Paragraph;
use Honda\Ui\View\Components\Password;
use Honda\Ui\View\Components\Title;
use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        // Components are registered manually so Laravel Idea can autocomplete them. You're welcome.
        $this->loadViewComponentsAs('ui', [
            Button::class,
            Secondary::class,
            Circular::class,
            White::class,
            Group::class,
            Input::class,
            CurrentYear::class,
            Title::class,
            Paragraph::class,
            Markdown::class,
            Password::class,
            Checkbox::class,
            Form::class,
        ]);

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
        ], 'ui-components');
    }
}
