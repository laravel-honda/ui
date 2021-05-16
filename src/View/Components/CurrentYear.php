<?php


namespace Honda\Ui\View\Components;


use Illuminate\View\View;

class CurrentYear extends Component
{
    public function render(): View
    {
        return view('ui::current-year');
    }
}
