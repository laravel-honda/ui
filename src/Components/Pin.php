<?php

namespace Honda\Ui\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Pin extends Component
{
    public ?string $name;
    public string $color;
    public ?string $label;
    public int $length;
    public bool $hideLabel;

    public function __construct(string $name = null, string $label = null, string $color = 'blue', int $length = 4, bool $hideLabel = false)
    {
        $this->name = $name;
        $this->label = $label ?? ($name === null ? $name : Str::humanize($name));
        $this->color = $color;
        $this->length = $length;
        $this->hideLabel = $hideLabel;
    }

    public function render()
    {
        return view('ui::pin');
    }
}
