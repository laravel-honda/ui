<?php

namespace Honda\Ui\Components;

use Illuminate\View\Component;

class ApplicationLogo extends Component
{
    public string $context;

    public function __construct(string $context = null)
    {
        $this->context = $context ?? 'default';
    }

    public function render()
    {
        return view('ui::application-logo');
    }
}
