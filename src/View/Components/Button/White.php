<?php

namespace Honda\Ui\View\Components\Button;

use Honda\Ui\View\Components\Button;
use Illuminate\View\View;

class White extends Button
{
    public function __construct(string $color = 'gray', bool $disabled = false, string $icon = null, string $iconSide = 'left')
    {
        parent::__construct($color, $disabled, $icon, $iconSide);
    }

    public function render(): View
    {
        return view('ui::button.white');
    }
}
