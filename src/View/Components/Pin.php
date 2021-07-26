<?php


namespace Honda\Ui\View\Components;


use Illuminate\Contracts\View\View;

class Pin extends Component
{
    public function __construct(
        public string $name,
        public string $color,
        public int $length = 6,
    )
    {
    }

    public function render(): View
    {
        return view('ui::pin');
    }
}
