<?php

namespace Honda\Ui\View\Components;

use Honda\Ui\Support\Str;

class Select extends Component
{
    public string $label;

    public function __construct(
        public string $name,
        public string $color,
        ?string $label = null,
        public bool $hideLabel = false,
        public bool $first = false,
        public bool $inline = false
    ) {
        $this->label = $label ?? Str::humanize($$this->name);
    }

    public function render()
    {
        return view('ui::select');
    }
}
