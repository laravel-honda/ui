<?php

namespace Honda\Ui\View;

use Honda\Ui\View\Components\Component;
use Illuminate\View\View;

class Title extends Component
{
    public function __construct(
        public string $level,
        public ?string $content = null,
        public ?string $color = null
    ) {
    }

    public function render(): View
    {
        return view('ui::title');
    }
}
