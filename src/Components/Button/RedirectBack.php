<?php

namespace Starts\Ui\Components\Button;

use Illuminate\View\Component;

class RedirectBack extends Component
{
    public string $button;

    public function __construct(string $button = 'button')
    {
        $this->button = $button;
    }

    public function render()
    {
        return view('ui::button.redirect-back');
    }
}
