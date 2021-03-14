<?php

namespace Starts\Ui\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Markdown extends Component
{
    public ?string $content;
    public ?string $size;
    public ?string $color;

    /**
     * Create a new component instance.
     *
     * @param string $size
     */
    public function __construct(string $content = null, string $size = null, string $color = null)
    {
        $this->content = $content;
        $this->size    = $size;
        $this->color   = $color ?? settings('color');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('ui::markdown');
    }
}
