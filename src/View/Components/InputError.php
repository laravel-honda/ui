<?php

namespace Honda\Ui\View\Components;

use Illuminate\View\View;

class InputError extends Component
{
    public function __construct(public string $name)
    {
    }

    public function render(): View
    {
        return view('ui::input-error');
    }
}
