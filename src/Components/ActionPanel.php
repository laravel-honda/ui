<?php

namespace Starts\Ui\Components;

use Illuminate\View\Component;

class ActionPanel extends Component
{
    public string $title;
    public ?string $description;

    public function __construct(string $title, string $description = null)
    {
        $this->title       = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('ui::action-panel');
    }
}