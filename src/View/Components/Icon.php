<?php


namespace Honda\Ui\View\Components;


use Illuminate\Contracts\View\View;

class Icon extends Component
{
    public function __construct(
        public string $name,
        public ?int $size = null
    )
    {
    }

    public function render(): View
    {
        return view('ui::icon');
    }
}
