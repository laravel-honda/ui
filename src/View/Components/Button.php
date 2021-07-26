<?php

namespace Honda\Ui\View\Components;

use Honda\Ui\Types\Direction;
use Honda\Ui\Types\Icon;
use Illuminate\Contracts\View\View;

class Button extends Component
{
    public ?Icon $icon;
    public Direction $iconSide;

    public function __construct(
        public string $color,
        public bool $disabled = false,
        string $icon = null,
        string $iconSide = 'left',
    )
    {
        $this->icon = $icon !== null ? Icon::fromString($icon) : null;
        $this->iconSide = new Direction($iconSide);
    }

    public function render(): View
    {
        return view('ui::button');
    }
}
