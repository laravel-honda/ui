<?php

namespace Honda\Ui\Components;

use Honda\UrlResolver\UrlResolver;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $color;
    public ?string $content;
    public ?string $href;
    public ?string $icon;
    public string $iconSet;
    public bool $dotted;
    public bool $disabled;

    public function __construct(string $content = null, string $color = null, bool $dotted = false, bool $disabled = false, string $href = null, string $icon = null, string $iconSet = 'tabler')
    {
        $this->content = $content;
        $this->color = $disabled ? 'gray' : ($color ?? settings('color'));
        $this->icon = $icon;
        $this->iconSet = $iconSet;
        $this->dotted = $dotted;
        $this->disabled = $disabled;
        $this->href = $href !== null ? UrlResolver::guess($href) : null;
    }

    public function render()
    {
        return view('ui::badge');
    }
}
