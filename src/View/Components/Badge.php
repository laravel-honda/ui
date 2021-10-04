<?php

namespace Honda\Ui\View\Components;

use Honda\Ui\Types\Icon;
use Honda\UrlResolver\UrlResolver;
use Illuminate\View\View;

class Badge extends Component
{
    public string $color;
    public ?string $href;
    public ?Icon $icon;
    public bool $disabled;

    public function __construct(string $color, bool $disabled = false, string $href = null, ?Icon $icon = null)
    {
        $this->color    = $color;
        $this->icon     = $icon !== null ? Icon::fromString($icon) : null;
        $this->disabled = $disabled;
        $this->href     = $href !== null ? UrlResolver::guess($href) : null;
    }

    public function render(): View
    {
        return view('ui::badge');
    }
}
