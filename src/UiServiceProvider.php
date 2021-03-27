<?php

namespace Honda\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        // Components are registered manually so Laravel Idea can autocomplete them. You're welcome.
        $this->loadViewComponentsAs('ui', [
            Components\ActionPanel::class,
            Components\Alert::class,
            Components\Avatar::class,
            Components\Badge::class,
            Components\Button::class,
            Components\Captcha::class,
            Components\Checkbox::class,
            Components\Checkbox::class,
            Components\Container::class,
            Components\CountingBadge::class,
            Components\Divider::class,
            Components\Dot::class,
            Components\File::class,
            Components\Form::class,
            Components\Icon::class,
            Components\Input::class,
            Components\Link::class,
            Components\Map::class,
            Components\Markdown::class,
            Components\Overline::class,
            Components\Paragraph::class,
            Components\Password::class,
            Components\Pill::class,
            Components\Pin::class,
            Components\Popover::class,
            Components\Progress::class,
            Components\Quantity::class,
            Components\Range::class,
            Components\Rating::class,
            Components\SearchableInput::class,
            Components\SectionTitle::class,
            Components\Select::class,
            Components\Social::class,
            Components\Spinner::class,
            Components\Stars::class,
            Components\StatCard::class,
            Components\Stats::class,
            Components\Title::class,
            Components\Toggle::class,
            Components\Value::class,
            Components\Variance::class,
        ])

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
        ], 'ui');
    }
}
