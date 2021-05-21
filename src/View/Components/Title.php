<?php

namespace Honda\Ui\View\Components;

use Illuminate\View\View;

class Title extends Component
{
    public function __construct(
        public string $level,
        public ?string $color = null
    ) {
    }

    public function render(): View
    {
        return view('ui::title');
    }
}
