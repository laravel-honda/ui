<?php

namespace Honda\Ui\View\Components;

use Honda\Ui\Support\Str;
use Illuminate\View\View;

class Textarea extends Component
{
    public string $label;

    public function __construct(
        public string $name,
        public string $color,
        public bool $hideLabel = false,
        public bool $first = false,
        public bool $disabled = false,
        public bool $inline = false,
        string $label = null,
    ) {
        $this->label = $label ?? Str::humanize($this->name);
    }

    public function render(): View
    {
        return view('ui::textarea');
    }
}
