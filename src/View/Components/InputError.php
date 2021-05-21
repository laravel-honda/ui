<?php

namespace Honda\Ui\View\Components;

use Honda\Ui\Types\Icon;
use Illuminate\View\View;

class InputError extends Component
{
    public function __construct(public Icon $icon)
    {
    }

    public function render(): View
    {
        return view('ui::input-error');
    }
}
