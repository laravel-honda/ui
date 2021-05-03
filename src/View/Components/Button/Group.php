<?php

namespace Honda\Ui\View\Components\Button;

use Honda\Ui\Types\Icon;
use Honda\Ui\View\Components\Component;
use Illuminate\Contracts\View\View;

class Group extends Component
{
    public function render(): View
    {
        return view('ui::button.group');
    }
}
