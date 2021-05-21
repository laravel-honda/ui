<?php

namespace Honda\Ui\View\Components;

use Honda\UrlResolver\UrlResolver;

class Form extends Component
{
    public string $action;

    public function __construct(string $action = '', public string $method = 'POST', public bool $hasFiles = false)
    {
        $this->action = UrlResolver::guess($action);
    }

    public function render()
    {
        return view('ui::form');
    }
}
