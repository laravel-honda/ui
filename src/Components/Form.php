<?php

namespace Honda\Ui\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Honda\Ui\Support\UrlResolver;

class Form extends Component
{
    public string $action;
    public string $method;
    public bool $hasFiles;

    public function __construct(string $action = '', string $method = 'POST', bool $hasFiles = false)
    {
        $this->action   = UrlResolver::guess($action);
        $this->method   = $method;
        $this->hasFiles = $hasFiles;
    }

    public function render(): View
    {
        return view('ui::form');
    }
}
