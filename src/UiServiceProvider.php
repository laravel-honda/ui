<?php

namespace Honda\Ui;

use Illuminate\Support\ServiceProvider;

class UiServiceProvider extends ServiceProvider
{
    // Components are register manually so Laravel Idea can autocomplete them. You're welcome.
    public array $components = [
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
        Components\Dropdown\Container::class,
        Components\Dropdown\Divider::class,
        Components\Dropdown\Link::class,
        Components\Dropdown\Trigger::class,
        Components\Button\Icon::class,
        Components\Button\Text::class,
        Components\Button\RedirectBack::class,
    ];

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        $this->loadViewComponentsAs('ui', $this->components);

        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/ui'),
        ], 'ui');
    }
}
