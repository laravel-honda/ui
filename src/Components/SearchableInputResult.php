<?php

namespace Starts\Ui\Components;

use Illuminate\View\Component;

class SearchableInputResult extends Component
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('ui::searchable-input-result');
    }
}
