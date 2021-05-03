<?php

namespace Honda\Ui\View\Components\Button;

use Honda\Ui\Types\Icon;
use Honda\Ui\View\Components\Component;
use Illuminate\Contracts\View\View;

class Circular extends Component
{
    public Icon $icon;

    public function __construct(
        string $icon,
        public string $color,
        public string $label,
        public string $radius = 'full'
    )
    {
        $this->icon = Icon::fromString($icon);
    }

    public function render(): View
    {
        return view('ui::button.circular');
    }
}
