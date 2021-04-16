<?php

namespace Honda\Ui\Components;

use Illuminate\View\Component;

class SectionTitle extends Component
{
    public ?string $title;
    public ?string $description;

    public function __construct(string $title = null, string $description = null)
    {
        $this->title       = $title;
        $this->description = $description;
    }

    public function render()
    {
        return view('ui::section-title');
    }
}
