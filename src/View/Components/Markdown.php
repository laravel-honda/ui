<?php

namespace Honda\Ui\View\Components;

use Illuminate\View\View;

class Markdown extends Component
{
    public function __construct(
        public string $color,
        public ?string $size = null
    ) {
    }

    public function render(): View
    {
        return view('ui::markdown');
    }
}
