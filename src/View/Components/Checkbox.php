<?php

namespace Honda\Ui\View\Components;

use Honda\Ui\Support\Str;
use Illuminate\View\View;

class Checkbox extends Component
{
    public string $name;
    public string $color;
    public string $label;
    public bool $first;

    public function __construct(string $name, string $color, string $label = null, bool $first = false)
    {
        $this->name  = $name;
        $this->color = $color;
        $this->label = $label ?? Str::humanize($name);
        $this->first = $first;
    }

    public function render(): View
    {
        return view('ui::checkbox');
    }
}
