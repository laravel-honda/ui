<?php

namespace Honda\Ui\View\Components;

use Illuminate\View\View;

class Paragraph extends Component
{
    public function __construct(
        public ?string $content = null,
        public string $color = 'gray',
        public bool $markdown = false
    ) {
    }

    public function render(): View
    {
        return view('ui::paragraph');
    }
}
