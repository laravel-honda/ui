<?php

namespace Honda\Ui\Components;

use Illuminate\View\Component;
use Str;

class Pin extends Component
{
    public string $name;
    public string $color;
    public string $label;
    public int $length;
    public bool $hiddenLabel;

    public function __construct(string $name, string $label = null, string $color = 'blue', int $length = 4, bool $hiddenLabel = false)
    {
        $this->name        = $name;
        $this->label       = $label ?? Str::humanize($name);
        $this->color       = $color;
        $this->length      = $length;
        $this->hiddenLabel = $hiddenLabel;
    }

    public function render()
    {
        return view('ui::pin');
    }
}
