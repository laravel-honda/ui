<?php

namespace Starts\Ui\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icon extends Component
{
    public string $type;
    public string $width;
    public string $height;
    public string $name;
    public string $set;

    public function __construct(string $name, bool $solid = false, string $w = '8', string $h = '8', string $size = null, string $set = 'tabler')
    {
        $this->name   = $name;
        $this->type   = $solid ? 's' : 'o';
        $this->width  = $size === null ? (str_starts_with($w, 'w-') ? $w : 'w-' . $w) : 'w-' . $size;
        $this->height = $size === null ? (str_starts_with($h, 'h-') ? $h : 'h-' . $h) : 'h-' . $size;
        $this->set    = $set;
    }

    public function render(): View
    {
        return view('ui::icon');
    }

    public function istabler(): bool
    {
        return $this->set === 'tabler';
    }
}
