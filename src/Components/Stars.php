<?php

namespace Starts\Ui\Components;

use Illuminate\View\Component;

class Stars extends Component
{
    public int $filled;
    public int $max;
    public string $icon;

    /**
     * Create a new component instance.
     */
    public function __construct(int $filled = 0, int $max = 5)
    {
        $this->filled = min($filled, $max);
        $this->max    = $max;
    }

    public function render()
    {
        return view('ui::stars');
    }
}
